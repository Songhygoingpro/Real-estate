<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>フォームが送信されました。</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

        body {
            font-family: "Noto Sans JP", sans-serif;
        }
    </style>
</head>

<body>
    <main>
        <section class="flex justify-center items-center p-4 h-[100vh]">
            <div class="flex flex-col justify-center items-center gap-8 bg-[#DBDEDF] px-4 py-8 md:p-8 container" data-aos="fadeUp">
                <div class="aos-container overflow-y-hidden">
                    <img src="../assets/img/successful-submission-image.png" class="max-w-16 w-full h-auto" data-aos="fade-up">
                </div>
                <div class="aos-container overflow-y-hidden">
                    <h1 class="text-3xl md:text-5xl font-bold" data-aos="fade-up">フォームが送信されました。</h1>
                </div>
                <div class="aos-container overflow-y-hidden">
                    <p data-aos="fade-up">ご提出いただきありがとうございます。</p>
                </div>
                <div class="aos-container overflow-y-hidden">
                    <button class="font-bold py-4 px-8 bg-[#5dadff] transition-all hover:bg-[#0056b3] no-underline text-white" data-aos="fade-up">
                        <a href="../baikyaku/index.html">ホームに戻る</a></button>
                </div>
            </div>
        </section>
    </main>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init({
            duration: 1000,
            offset: 0,
            once: true,
        });

        document.querySelectorAll('[data-aos="fade-up"]').forEach((element, index) => {
            element.setAttribute('data-aos-delay', `${index * 100}`);
        });
    </script>
</body>

</html>