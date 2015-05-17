(function () {
    var links, title,

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

        for (i = 0, len = links.length; i < len; i++) {
            (function (i) {
                var link = links[i];

                link.addEventListener('mouseover', removeTitle);
                link.addEventListener('mouseout', resetTitle);
            }(i));
        }

    };

    document.addEventListener('DOMContentLoaded', onDOMContentLoaded);
}());

