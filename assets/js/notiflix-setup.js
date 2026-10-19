/* Notiflix global setup.
   The library is loaded from assets/vendor/notiflix/ (see partials/script.php).
   Everything below runs once per page, so the default look of every
   Notify / Report / Confirm dialog matches the portfolio theme. */
(function () {
    'use strict';

    if (typeof Notiflix === 'undefined') {
        return;
    }

    var theme = {
        green: '#59C378',
        greenDark: '#41b362',
        surface: '#282828',
        text: '#FFFFFF',
        muted: '#D8D8D8',
        // Notiflix wraps this value in quotes and appends its own fallback
        // stack, so pass the bare family name only.
        font: 'Inter'
    };

    // Toast notifications (bottom-right, auto dismiss).
    Notiflix.Notify.init({
        position: 'right-bottom',
        distance: '20px',
        timeout: 4000,
        clickToClose: true,
        showOnlyTheLastOne: true,
        cssAnimationStyle: 'from-bottom',
        fontFamily: theme.font,
        success: { background: theme.greenDark, textColor: theme.text },
        info: { background: theme.surface, textColor: theme.text },
        warning: { background: '#E34E44', textColor: theme.text },
        failure: { background: '#FF5549', textColor: theme.text }
    });

    // Modal popup boxes.
    Notiflix.Report.init({
        width: '340px',
        borderRadius: '8px',
        backgroundColor: theme.surface,
        plainText: true,
        cssAnimationStyle: 'zoom',
        fontFamily: theme.font,
        success: { svgColor: theme.green, titleColor: theme.text, messageColor: theme.muted, buttonBackground: theme.green, buttonColor: '#202020', backOverlayColor: 'rgba(0, 0, 0, 0.6)' },
        failure: { svgColor: '#FF5549', titleColor: theme.text, messageColor: theme.muted, buttonBackground: '#FF5549', buttonColor: theme.text, backOverlayColor: 'rgba(0, 0, 0, 0.6)' },
        warning: { svgColor: '#E34E44', titleColor: theme.text, messageColor: theme.muted, buttonBackground: '#E34E44', buttonColor: theme.text, backOverlayColor: 'rgba(0, 0, 0, 0.6)' },
        info: { svgColor: theme.green, titleColor: theme.text, messageColor: theme.muted, buttonBackground: theme.green, buttonColor: '#202020', backOverlayColor: 'rgba(0, 0, 0, 0.6)' }
    });

    // Confirmation dialog.
    Notiflix.Confirm.init({
        width: '340px',
        borderRadius: '8px',
        position: 'center',
        backgroundColor: theme.surface,
        plainText: true,
        cssAnimationStyle: 'zoom',
        fontFamily: theme.font,
        backOverlayColor: 'rgba(0, 0, 0, 0.6)',
        titleColor: theme.text,
        messageColor: theme.muted,
        okButtonBackground: theme.green,
        okButtonColor: '#202020',
        cancelButtonBackground: '#3a3a3a',
        cancelButtonColor: theme.text
    });

    // Loading spinner.
    Notiflix.Loading.init({
        backgroundColor: 'rgba(32, 32, 32, 0.8)',
        svgColor: theme.green,
        fontFamily: theme.font,
        clickToClose: false
    });

    /* Any element carrying data-notiflix-coming-soon="<name>" shows a
       "coming soon" popup instead of following its href. */
    document.querySelectorAll('[data-notiflix-coming-soon]').forEach(function (el) {
        el.addEventListener('click', function (event) {
            event.preventDefault();
            Notiflix.Report.info(
                'Segera Hadir',
                'Website ' + el.dataset.notiflixComingSoon + ' sedang dalam tahap pengembangan. Nantikan peluncurannya, ya!',
                'Mengerti'
            );
        });
    });

    /* Project action buttons with no url yet. Delegated on document so the
       owl-carousel can clone slides without losing the handler. */
    var noLinkMessages = {
        demo: {
            title: 'Demo Belum Tersedia',
            message: function (name) {
                return '"' + name + '" belum punya tautan demo saat ini.';
            }
        },
        repo: {
            title: 'Repo Belum Tersedia',
            message: function (name) {
                return '"' + name + '" belum dipublikasikan di GitHub.';
            }
        }
    };

    document.addEventListener('click', function (event) {
        var el = event.target.closest('[data-project-no-link]');

        if (!el) {
            return;
        }

        event.preventDefault();

        var kind = el.dataset.projectNoLink;
        var entry = noLinkMessages[kind] || noLinkMessages.demo;

        Notiflix.Report.info(
            entry.title,
            entry.message(el.dataset.projectName || 'Proyek ini'),
            'Mengerti'
        );
    });
}());
