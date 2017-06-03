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

    if (list) {
        var owlLink = document.getElementsByTagName('a')[1];

        listHeight = list.scrollHeight;
        list.style.height = 0;

        owlLink.addEventListener('click', function (e) {
            animate(list.parentNode.style.display === 'block');
            e.preventDefault();
        });
    }
});

