<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Hasil Tes QHOMEMART!</title>
    <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico">

    <!-- STYLES -->

    <style {csp-style-nonce}>
        * {
            transition: background-color 300ms ease, color 300ms ease;
        }

        *:focus {
            background-color: rgba(221, 72, 20, .2);
            outline: none;
        }

        html,
        body {
            color: rgba(33, 37, 41, 1);
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji";
            font-size: 16px;
            margin: 0;
            padding: 0;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
            text-rendering: optimizeLegibility;
        }

        header {
            background-color: rgba(247, 248, 249, 1);
            padding: .4rem 0 0;
        }

        .menu {
            padding: .4rem 2rem;
        }

        header ul {
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            list-style-type: none;
            margin: 0;
            overflow: hidden;
            padding: 0;
            text-align: right;
        }

        header li {
            display: inline-block;
        }

        header li a {
            border-radius: 5px;
            color: rgba(0, 0, 0, .5);
            display: block;
            height: 44px;
            text-decoration: none;
        }

        header li.menu-item a {
            border-radius: 5px;
            margin: 5px 0;
            height: 38px;
            line-height: 36px;
            padding: .4rem .65rem;
            text-align: center;
        }

        header li.menu-item a:hover,
        header li.menu-item a:focus {
            background-color: rgba(221, 72, 20, .2);
            color: rgba(221, 72, 20, 1);
        }

        header .logo {
            float: left;
            height: 44px;
            padding: .4rem .5rem;
        }

        header .menu-toggle {
            display: none;
            float: right;
            font-size: 2rem;
            font-weight: bold;
        }

        header .menu-toggle button {
            background-color: rgba(221, 72, 20, .6);
            border: none;
            border-radius: 3px;
            color: rgba(255, 255, 255, 1);
            cursor: pointer;
            font: inherit;
            font-size: 1.3rem;
            height: 36px;
            padding: 0;
            margin: 11px 0;
            overflow: visible;
            width: 40px;
        }

        header .menu-toggle button:hover,
        header .menu-toggle button:focus {
            background-color: rgba(221, 72, 20, .8);
            color: rgba(255, 255, 255, .8);
        }

        header .heroe {
            margin: 0 auto;
            max-width: 1100px;
            padding: 1rem 1.75rem 1.75rem 1.75rem;
        }

        header .heroe h1 {
            font-size: 2.5rem;
            font-weight: 500;
        }

        header .heroe h2 {
            font-size: 1.5rem;
            font-weight: 300;
        }

        section {
            margin: 0 auto;
            max-width: 1100px;
            padding: 2.5rem 1.75rem 3.5rem 1.75rem;
        }

        section h1 {
            margin-bottom: 2.5rem;
        }

        section h2 {
            font-size: 120%;
            line-height: 2.5rem;
            padding-top: 1.5rem;
        }

        section pre {
            background-color: rgba(247, 248, 249, 1);
            border: 1px solid rgba(242, 242, 242, 1);
            display: block;
            font-size: .9rem;
            margin: 2rem 0;
            padding: 1rem 1.5rem;
            white-space: pre-wrap;
            word-break: break-all;
        }

        section code {
            display: block;
        }

        section a {
            color: rgba(221, 72, 20, 1);
        }

        section svg {
            margin-bottom: -5px;
            margin-right: 5px;
            width: 25px;
        }

        .further {
            background-color: rgba(247, 248, 249, 1);
            border-bottom: 1px solid rgba(242, 242, 242, 1);
            border-top: 1px solid rgba(242, 242, 242, 1);
        }

        .further h2:first-of-type {
            padding-top: 0;
        }

        .svg-stroke {
            fill: none;
            stroke: #000;
            stroke-width: 32px;
        }

        footer {
            background-color: rgba(221, 72, 20, .8);
            text-align: center;
        }

        footer .environment {
            color: rgba(255, 255, 255, 1);
            padding: 2rem 1.75rem;
        }

        footer .copyrights {
            background-color: rgba(62, 62, 62, 1);
            color: rgba(200, 200, 200, 1);
            padding: .25rem 1.75rem;
        }

        @media (max-width: 629px) {
            header ul {
                padding: 0;
            }

            header .menu-toggle {
                padding: 0 1rem;
            }

            header .menu-item {
                background-color: rgba(244, 245, 246, 1);
                border-top: 1px solid rgba(242, 242, 242, 1);
                margin: 0 15px;
                width: calc(100% - 30px);
            }

            header .menu-toggle {
                display: block;
            }

            header .hidden {
                display: none;
            }

            header li.menu-item a {
                background-color: rgba(221, 72, 20, .1);
            }

            header li.menu-item a:hover,
            header li.menu-item a:focus {
                background-color: rgba(221, 72, 20, .7);
                color: rgba(255, 255, 255, .8);
            }
        }
    </style>
</head>

<body>

    <!-- HEADER: HEROE SECTION -->
    <header>

        <div class="heroe">

            <h1>Hasil tes ini dibangun menggunakan CodeIgniter v<?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

            <!-- <h2>The small framework with powerful features</h2> -->

        </div>

    </header>

    <!-- CONTENT -->

    <section>
        <p>Hasil Tes ini menggunakan database MySQL. Untuk itu jangan lupa untuk menjalankan migration tabel-tabel yang dibutuhkan dan juga seeder untuk menghasilkan data dummy.</p>

        <pre>
            <code>$ php spark migrate</b></code>
            <code>$ php spark db:seed DatabaseSeeder</b></code>
        </pre>
    </section>

    <section>
        <h1>**Soal 1:**</h1>

        <p>Buatlah API sederhana untuk menampilkan daftar film berdasarkan genre. API ini harus menerima parameter "genre" melalui metode GET dan mengembalikan JSON berisi daftar film dengan genre tersebut.</p>

        <pre><code>/api/movies?genre=<b>$genre</b></code></pre>

        <p>Hasil response sukses:</p>

        <pre id="json-movies"></pre>

        <script>
            // Contoh JSON
            const movies = {
                "data": [{
                        "id": "1",
                        "title": "Film 1",
                        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                        "release_date": "2014-03-28",
                        "genre": "Action"
                    },
                    {
                        "id": "2",
                        "title": "Film 2",
                        "description": "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
                        "release_date": "2009-11-05",
                        "genre": "Action"
                    }
                ]
            };

            // Mengubah JSON menjadi string dengan format yang indah
            const jsonString = JSON.stringify(movies, null, 2);

            // Menampilkan JSON dalam elemen pre
            document.getElementById('json-movies').textContent = jsonString;
        </script>
    </section>

    <section>
        <h1>**Soal 2:**</h1>

        <p>Buatlah API sederhana untuk menghitung luas persegi panjang. API ini harus menerima parameter "panjang" dan "lebar" melalui metode POST dan mengembalikan JSON berisi nilai luas.</p>

        <pre><code>/api/rectangle?length=<b>8</b>&width=<b>3</b></code></pre>

        <p>Hasil response sukses:</p>

        <pre id="json-rectangle"></pre>

        <script>
            // Contoh JSON
            const rectangle = {
                "data": {
                    "luas": 24
                }
            };

            // Mengubah JSON menjadi string dengan format yang indah
            const rectangleString = JSON.stringify(rectangle, null, 2);

            // Menampilkan JSON dalam elemen pre
            document.getElementById('json-rectangle').textContent = rectangleString;
        </script>
    </section>

    <section>
        <h1>**Soal 3:**</h1>

        <p>Buatlah API sederhana untuk menyimpan pesan. API ini harus menerima parameter "pesan" melalui metode POST dan mengembalikan JSON berisi status penyimpanan pesan (sukses/gagal).</p>

        <pre><code>/api/message?message=<b>$message</b></code></pre>

        <p>Hasil response sukses:</p>

        <pre id="json-message"></pre>

        <script>
            // Contoh JSON
            const message = {
                "status": "Sukses",
                "message": "Pesan berhasil disimpan."
            };

            // Mengubah JSON menjadi string dengan format yang indah
            const messageString = JSON.stringify(message, null, 2);

            // Menampilkan JSON dalam elemen pre
            document.getElementById('json-message').textContent = messageString;
        </script>
    </section>

    <section>
        <h1>**Soal 4:**</h1>

        <p>Buatlah API sederhana untuk menampilkan tanggal dan waktu saat ini dalam format JSON.</p>

        <pre><code>/api/datetime</code></pre>

        <p>Hasil response sukses:</p>

        <pre id="json-datetime"></pre>

        <script>
            // Contoh JSON
            const datetime = {
                "data": {
                    "datetime": "05 Juni 2024 21:32:51"
                }
            };

            // Mengubah JSON menjadi string dengan format yang indah
            const datetimeString = JSON.stringify(datetime, null, 2);

            // Menampilkan JSON dalam elemen pre
            document.getElementById('json-datetime').textContent = datetimeString;
        </script>
    </section>

    <section>
        <h1>**Soal 5:**</h1>

        <p>Buatlah API sederhana untuk menyapa pengguna dengan nama yang dimasukkan melalui parameter "name" melalui metode GET.</p>

        <pre><code>/api/hello?name=<b>QHomeMart</b></code></pre>

        <p>Hasil response sukses:</p>

        <pre id="json-greeting"></pre>

        <script>
            // Contoh JSON
            const greeting = {
                "data": {
                    "message": "Halo, QHomeMart! Selamat pagi, semoga harimu menyenangkan dan jangan lupa tersenyum."
                }
            };

            // Mengubah JSON menjadi string dengan format yang indah
            const greetingString = JSON.stringify(greeting, null, 2);

            // Menampilkan JSON dalam elemen pre
            document.getElementById('json-greeting').textContent = greetingString;
        </script>
    </section>

    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <footer>
        <div class="copyrights">

            <div class="footer-content">
                <p>&copy; <?= date('Y') ?> Damas Eka K</p>
            </div>

        </div>
    </footer>

</body>

</html>