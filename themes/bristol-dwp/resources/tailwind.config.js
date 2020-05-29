const defaultTheme = require('tailwindcss/defaultTheme');

module.exports = {
    theme: {
        extend: {
            inset: {
                '20': '5rem',
                '-36': '-9rem',
            },
        },
        fontFamily: {
            sans: ['Inter', ...defaultTheme.fontFamily.sans],
        },
    },
    purge: {
        content: [
            './themes/bristol-dwp/**/*.html',
            './themes/bristol-dwp/**/*.htm',
            './themes/bristol-dwp/**/*.js',
            './themes/bristol-dwp/**/*.jsx',
            './themes/bristol-dwp/**/*.ts',
            './themes/bristol-dwp/**/*.tsx',
            './themes/bristol-dwp/**/*.php',
            './themes/bristol-dwp/**/*.vue',
            './themes/bristol-dwp/**/*.twig',
        ],
        options: {
            defaultExtractor: content =>
                content.match(/[\w-/.:]+(?<!:)/g) || [],
            whitelistPatterns: [/-active$/, /-enter$/, /-leave-to$/, /show$/],
        },
    },
    plugins: [require('@tailwindcss/ui')],
};
