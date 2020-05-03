module.exports = {
    purge: [
        './resources/views/home/index.blade.php',
        './resources/views/admin/index.blade.php',
        './resources/views/auth/login.blade.php',
        './resources/views/auth/register.blade.php',
        './resources/views/auth/verify.blade.php',
        './resources/views/auth/passwords/confirm.blade.php',
        './resources/views/auth/passwords/email.blade.php',
        './resources/views/auth/passwords/reset.blade.php',
        './resources/views/layouts/app.blade.php',
        './resources/views/layouts/form.blade.php',
        './resources/views/layouts/_mobile.blade.php',
        './resources/views/layouts/_loader.blade.php',
        './resources/views/layouts/_header.blade.php',
        './resources/views/layouts/_head.blade.php',
        './resources/views/layouts/_footer.blade.php',
        './resources/views/layouts/_bar.blade.php',
        './resources/views/post/index.blade.php',
        './resources/views/post/show.blade.php',
        './resources/views/post/edit.blade.php',
        './resources/views/post/create.blade.php',
        './resources/js/app.js'
    ],
    theme: {
        fontFamily: {
            display: [
                "Inter",
                "-apple-system",
                "BlinkMacSystemFont",
                '"Segoe UI"',
                "Roboto",
                '"Helvetica Neue"',
                "Arial",
                '"Noto Sans"',
                "sans-serif"
            ],

            body: [
                "Inter",
                "-apple-system",
                "BlinkMacSystemFont",
                '"Segoe UI"',
                "Roboto",
                '"Helvetica Neue"',
                "Arial",
                '"Noto Sans"',
                "sans-serif"
            ]
        },
        extend: {
            textColor: {
                dark: "#070707",
                light: "#f6f6f6",
                highlight: "#43CCCB"
            },
            height: {
                hero: "640px"
            },
            backgroundPosition: {
                "r-80": "80%"
            }
        }
    },
    variants: {},
    plugins: []
};
