Pete.ready(function () {
    var links = Pete.Element.gets('a'),
        title, list;

    function removeTitle() {
        // Neuter the default browser behavior.
        title = this.title;
        this.title = '';
    }

    function resetTitle() {
        // Restore the title.
        this.title = title;
    }

    links.on('mouseover', removeTitle);
    links.on('mouseout', resetTitle);

    list = Pete.Element.get('nav div ul').dom;

    // HFN (Hack For Now :) )
    // Only the internal pages will have the 'nav div ul' dom structure.
    if (list) {
        var parent = list.parentNode,
            link = document.getElementsByTagName('a')[1],
            div = document.createElement('div'),
            style = div.style,
            body = document.body,
            currentHeight = 0,
            listHeight;

        function animate(closing) {
            if (!closing) {
                parent.style.display = 'block';

                if (currentHeight < listHeight) {
                    currentHeight += 10;
                    list.style.height = currentHeight + 'px';

                    setTimeout(function () {
                        animate(false);
                    }, 5);
                }

            } else {
                if (currentHeight > 10) {
                    currentHeight -= 10;
                    list.style.height = currentHeight + 'px';

                    setTimeout(function () {
                        animate(true);
                    }, 5);
                } else {
                    parent.style.display = 'none';
                }
            }
        }

        // Position the new div safely outside of the viewport.
        style.display = 'block';
        style.position = 'absolute';
        style.top = '-10000px';

        // Append the element to be measured.
        div.appendChild(list);

        // The new div must be in the DOM in order for it or any hierarchical elements to be measured.
        body.appendChild(div);

        // Measure, re-append, and cleanup.
        list.style.height = 0;
        listHeight = list.scrollHeight;
        parent.appendChild(list);
        body.removeChild(div);
        div = null;

        link.addEventListener('click', function (e) {
            animate(parent.style.display === 'block');
            e.preventDefault();
        });
    }
});

