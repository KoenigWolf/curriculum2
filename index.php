<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>エンジニア未経験者向けカリキュラム</title>
   <!-- TailwindCSSのスタイルシートをリンク -->
   <link href="output.css" rel="stylesheet">
</head>

<body class="bg-gray-900 text-gray-200 font-sans antialiased">
   
   <!-- ヘッダー部分 -->
   <header class="bg-gradient-to-r from-blue-500 to-blue-400 text-white py-8 shadow-md">
      <h1 class="text-4xl font-light text-center">エンジニア未経験者向けカリキュラム</h1>
   </header>

   <!-- ナビゲーション部分をインクルード -->
   <?php include 'nav.html'; ?>

   <main class="container mx-auto mt-12 p-8 bg-gray-800 rounded-xl shadow-2xl">
       <section id="overview" class="mb-12">
           <h2 class="text-4xl text-white font-extrabold mb-6 border-b-4 border-blue-500 pb-2">
               概要
           </h2>
           <p class="text-lg leading-relaxed text-gray-300">
               このカリキュラムは、エンジニア未経験者がステップバイステップで進むことで、プログラミングとウェブ開発の基本を学び、
               最終的にエンジニアとしてのスキルを身につけることを目的としています。全体期間は3ヶ月から6ヶ月を目安としており、
               1日あたり2時間から4時間の学習を推奨しています。
           </p>
       </section>

       <!-- カリキュラム目次部分をインクルード -->
       <?php include 'curriculum.html'; ?>

       <section id="contact" class="mt-12">
           <h2 class="text-4xl text-white font-extrabold mb-6 border-b-4 border-blue-500 pb-2">
               お問い合わせ
           </h2>
           <p class="text-lg leading-relaxed text-gray-300">
               カリキュラムに関する質問やサポートが必要な場合は、以下のメールアドレスにご連絡ください。
           </p>
           <p class="text-lg font-semibold mt-4">
               <a href="mailto:toshikiii7@outlook.com" class="text-blue-400 hover:text-blue-600 transition duration-300 ease-in-out">
                   toshikiii7@outlook.com
               </a>
           </p>
       </section>
   </main>

   <!-- フッター部分をインクルード -->
   <?php include 'footer.html'; ?>
</body>

</html>
