(function (window, document) {

    let buttons = document.querySelectorAll('a.social-share__btn');

    for (let i = 0; i < buttons.length; i++) {
        buttons[i].addEventListener('click', function(event) {

            let width = 575;
            let height = 400;

            let left = (document.documentElement.clientWidth / 2 - width / 2);
            let top = (document.documentElement.clientHeight - height) / 2;

            let options = 'status=1,resizable=yes' +
                ',width=' + width + ',height=' + height +
                ',top=' + top + ',left=' + left;

            let popup = window.open(event.target.url, '', options);

            popup.focus();

            return false;
        });
    }

})(window, document);
