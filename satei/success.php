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

@font-face {
    font-family: 'Meiryo';
    src: url('../assets/fonts/Meiryo.ttf') format('truetype');
    font-weight: normal;
    font-style: normal;
}
        body {
            background-color: #EFF0F1;
            text-align: center;
            font-family: 'Meiryo', 'Arial', 'Helvetica', sans-serif;
        }

        .btn {
            padding: 1rem 2rem;
            background-color: #5DADFF;
            color: #fff;
            border: none;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <main>
        <section class="flex justify-center items-center p-4 pt-8">
            <div class="flex flex-col justify-center items-center gap-8 bg-[#DBDEDF] px-4 py-8 md:p-8 container" data-aos="fadeUp">
                <img src="../assets/img/successful-submission-image.png" class="max-w-16 w-full h-auto">
                <h1 class="text-3xl md:text-5xl font-bold">フォームが送信されました。</h1>
                <p>ご提出いただきありがとうございます。</p>
                <a href="../baikyaku/index.html" class="btn font-bold">ホームに戻る</a>
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
  </script>
</body>
</html>