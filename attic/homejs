(function () {
    var links, figures, title,

    highlight = function (e) {
        var id, target;

        if (e.target.tagName.toUpperCase() !== "A") {
            id = this.id;
            target = document.getElementsByTagName('nav')[0].querySelector('a[title="' + id + '"]').parentNode;
        } else {
            id = this.title;
            target = this.parentNode;
        }

        Array.prototype.slice.call(links).forEach(function (link) {
            link.parentElement.style.background = '#1A2B2B';
            link.parentElement.style.borderRadius = '0px';
        });

        target.style.background = '#337ab7';
        target.style.borderRadius = '8px';
    },

    removeTitle = function () {
        // Neuter the default browser behavior.
        title = this.title;
        this.title = '';
    },

    resetTitle = function () {
        // Restore the title.
        this.title = title;
    },

    onDOMContentLoaded = function () {
        var len, i;

        links = document.querySelectorAll('a');
        figures = document.querySelectorAll('figure');

        for (i = 0, len = links.length; i < len; i++) {
            (function (i) {
                var link = links[i];

                figures[i].addEventListener('mouseover', highlight);
                link.addEventListener('mouseover', highlight);
                link.addEventListener('mouseover', removeTitle);
                link.addEventListener('mouseout', resetTitle);
            }(i));
        }

    };

    document.addEventListener('DOMContentLoaded', onDOMContentLoaded);
}());

