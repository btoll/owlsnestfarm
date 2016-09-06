document.addEventListener('DOMContentLoaded', function () {
    var currentHeight = 0;
    var listHeight;

    function animate(closing) {
        var parent = list.parentNode;

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

    var list = document.querySelector('nav div ul');

    // Only the internal pages will have the 'nav div ul' dom structure.
    if (list) {
        var parent = list.parentNode;
        var link = document.getElementsByTagName('a')[0];
        var div = document.createElement('div');
        var style = div.style;
        var body = document.body;

        // Position the new div safely outside of the viewport.
        style.display = 'block';
        style.position = 'absolute';
        style.top = '-10000px';

        // Append the element to be measured.
        div.appendChild(list);

        // The new div must be in the DOM in order for it or any hierarchical elements to be measured.
        body.appendChild(div);

        // Measure, re-append, and cleanup.
        listHeight = list.scrollHeight;
        list.style.height = 0;
        parent.appendChild(list);
        body.removeChild(div);
        div = null;

        link.addEventListener('click', function (e) {
            animate(parent.style.display === 'block');
            e.preventDefault();
        });
    }
});

