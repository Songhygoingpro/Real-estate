<?php

session_start();

$物件の種別 = '';
$prefecture = '';
$city = '';
$town = '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $物件の種別 = isset($_POST['物件の種別']) ? htmlspecialchars($_POST['物件の種別']) : '';
  $prefecture = isset($_POST['prefecture']) ? htmlspecialchars($_POST['prefecture']) : '';
  $city = isset($_POST['city']) ? htmlspecialchars($_POST['city']) : '';
  $town = isset($_POST['town']) ? htmlspecialchars($_POST['town']) : '';

  // Store sanitized data in session variables
  $_SESSION['物件の種別'] = $物件の種別;
  $_SESSION['prefecture'] = $prefecture;
  $_SESSION['city'] = $city;
  $_SESSION['town'] = $town;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/style.css" />
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
  <title>査定</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@100..900&display=swap');

    body {
      font-family: "Noto Sans JP", sans-serif;
    }
  </style>
</head>

<body data-aos="custom-fadeUp">
  <header class="flex bg-sky-600 text-white justify-between items-center py-6 px-4 md:px-10 w-full sticky top-0 z-10">
    <a href=""><img src="" /></a>
  </header>
  <main>
    <section class="form-section flex justify-center items-center py-16">
      <div class="form-section__inner w-full max-w-[1040px] h-auto grid gap-6 px-4">
        <h1 class="text-3xl text-center font-bold">査定</h1>
        <form class="grid gap-6" action="mail.php" method="post" id="inquiriesForm" onsubmit="submitForm(event)">
          <div class="grid border-0 md:border-[1px] border-black">
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] gap-4 p-4 px-0 md:px-8">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">物件種別</p>
              </div>
              <div class="flex justify-start items-center">
                <?php
                if ($物件の種別) {
                  echo "<p>$物件の種別</p>";
                } else {
                  echo "";
                }
                ?>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">所在地</p>
              </div>
              <div class="grid gap-4">
                <div>
                  <?php
                  echo "<strong>$prefecture$city$town</strong>";
                  ?>
                </div>
                <p>丁目・番地・号 (入力例: 1-3-13)</p>
                <input type="text" name="丁目" class="w-full bg-gray-300" />
                <p>マンション名</p>
                <input type="text" name="マンション名" class="w-full bg-gray-300" />
                <p>号室</p>
                <input type="text" name="号室" class="w-full bg-gray-300" />
                <p class="text-[#5D0000]">
                  番地など住所情報にお間違えがないかご確認ください（不足していると、査定が実施できません）
                </p>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-gray-500 p-1 text-white">任意</p>
                <p class="font-bold">間取り</p>
              </div>
              <div class="grid gap-4">
                <div class="select w-[15rem] bg-gray-300">
                  <select name="間取り">
                    <option value="">--選択してください--</option>
                    <option value="1R">1R</option>
                    <option value="1K/DK">1K/DK</option>
                    <option value="1LK/LDK">1LK/LDK</option>
                    <option value="2K/DK">2K/DK</option>
                    <option value="2LK/LDK">2LK/LDK</option>
                    <option value="3K/DK">3K/DK</option>
                    <option value="3LK/LDK">3LK/LDK</option>
                    <option value="4K/DK">4K/DK</option>
                    <option value="4LK/LDK">4LK/LDK</option>
                    <option value="5K/DK">5K/DK</option>
                    <option value="5LK/LDK">5LK/LDK</option>
                    <option value="6K/DK">6K/DK</option>
                    <option value="6LK/LDK以上">6LK/LDK以上</option>
                  </select>
                </div>
                <p class="text-[#5D0000]">近い間取りでかまいません</p>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-gray-500 p-1 text-white">任意</p>
                <p class="font-bold">専有面積</p>
              </div>
              <div class="grid gap-4">
                <div class="select w-[15rem] bg-gray-300">
                  <select name="専有面積">
                    <option value="">--選択してください--</option>
                    <option value="0">わからない</option>
                    <option value="10㎡ (3坪)">10㎡ (3坪)</option>
                    <option value="20㎡ (6.1坪)">20㎡ (6.1坪)</option>
                    <option value="30㎡ (9.1坪)">30㎡ (9.1坪)</option>
                    <option value="40㎡ (12.1坪)">40㎡ (12.1坪)</option>
                    <option value="50㎡ (15.1坪)">50㎡ (15.1坪)</option>
                    <option value="60㎡ (18.2坪)">60㎡ (18.2坪)</option>
                    <option value="70㎡ (21.2坪)">70㎡ (21.2坪)</option>
                    <option value="80㎡ (24.2坪)">80㎡ (24.2坪)</option>
                    <option value="90㎡ (27.2坪)">90㎡ (27.2坪)</option>
                    <option value="100㎡ (30.3坪)">100㎡ (30.3坪)</option>
                    <option value="110㎡ (33.3坪)">110㎡ (33.3坪)</option>
                    <option value="120㎡ (36.3坪)">120㎡ (36.3坪)</option>
                    <option value="130㎡ (39.3坪)">130㎡ (39.3坪)</option>
                    <option value="140㎡ (42.4坪)">140㎡ (42.4坪)</option>
                    <option value="150㎡ (45.4坪)">150㎡ (45.4坪)</option>
                    <option value="160㎡ (48.4坪)">160㎡ (48.4坪)</option>
                    <option value="170㎡ (51.4坪)">170㎡ (51.4坪)</option>
                    <option value="180㎡ (54.5坪)">180㎡ (54.5坪)</option>
                    <option value="190㎡ (57.5坪)">190㎡ (57.5坪)</option>
                    <option value="200㎡ (60.5坪)">200㎡ (60.5坪)</option>
                    <option value="210㎡ (63.5坪)">210㎡ (63.5坪)</option>
                    <option value="220㎡ (66.6坪)">220㎡ (66.6坪)</option>
                    <option value="230㎡ (69.6坪)">230㎡ (69.6坪)</option>
                    <option value="240㎡ (72.6坪)">240㎡ (72.6坪)</option>
                    <option value="250㎡ (75.6坪)">250㎡ (75.6坪)</option>
                    <option value="260㎡ (78.6坪)">260㎡ (78.6坪)</option>
                    <option value="270㎡ (81.7坪)">270㎡ (81.7坪)</option>
                    <option value="280㎡ (84.7坪)">280㎡ (84.7坪)</option>
                    <option value="290㎡ (87.7坪)">290㎡ (87.7坪)</option>
                    <option value="300㎡ (90.8坪)">300㎡ (90.8坪)</option>
                    <option value="310㎡ (93.8坪)">310㎡ (93.8坪)</option>
                    <option value="320㎡ (96.8坪)">320㎡ (96.8坪)</option>
                    <option value="330㎡ (99.8坪)">330㎡ (99.8坪)</option>
                    <option value="340㎡ (102.9坪)">340㎡ (102.9坪)</option>
                    <option value="350㎡ (105.9坪)">350㎡ (105.9坪)</option>
                    <option value="360㎡ (108.9坪)">360㎡ (108.9坪)</option>
                    <option value="370㎡ (111.9坪)">370㎡ (111.9坪)</option>
                    <option value="380㎡ (115坪)">380㎡ (115坪)</option>
                    <option value="390㎡ (118坪)">390㎡ (118坪)</option>
                    <option value="400㎡ (121坪)">400㎡ (121坪)</option>
                    <option value="410㎡ (124坪)">410㎡ (124坪)</option>
                    <option value="420㎡ (127.1坪)">420㎡ (127.1坪)</option>
                    <option value="430㎡ (130.1坪)">430㎡ (130.1坪)</option>
                    <option value="440㎡ (133.1坪)">440㎡ (133.1坪)</option>
                    <option value="450㎡ (136.1坪)">450㎡ (136.1坪)</option>
                    <option value="460㎡ (139.2坪)">460㎡ (139.2坪)</option>
                    <option value="470㎡ (142.2坪)">470㎡ (142.2坪)</option>
                    <option value="480㎡ (145.2坪)">480㎡ (145.2坪)</option>
                    <option value="490㎡ (148.2坪)">490㎡ (148.2坪)</option>
                    <option value="500㎡ (151.3坪) 以上">500㎡ (151.3坪) 以上</option>
                  </select>
                </div>
                <p class="text-[#5D0000]">おおよその面積でかまいません</p>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">築年</p>
              </div>
              <div class="grid gap-4">
                <div class="flex items-center gap-4">
                  <div class="select w-[15rem] bg-gray-300">
                    <select name="築年">
                      <option value="">--選択してください--</option>
                      <option value="2024年(令和6年)今年">2024年(令和6年) 今年</option>
                      <option value="2023年(令和5年)築1年">2023年(令和5年) 築1年</option>
                      <option value="2022年(令和4年)築2年">2022年(令和4年) 築2年</option>
                      <option value="2021年(令和3年)築3年">2021年(令和3年) 築3年</option>
                      <option value="2020年(令和2年)築4年">2020年(令和2年) 築4年</option>
                      <option value="2019年(令和元年)築5年">2019年(令和元年) 築5年</option>
                      <option value="2018年(平成30年)築6年">2018年(平成30年) 築6年</option>
                      <option value="2017年(平成29年)築7年">2017年(平成29年) 築7年</option>
                      <option value="2016年(平成28年)築8年">2016年(平成28年) 築8年</option>
                      <option value="2015年(平成27年)築9年">2015年(平成27年) 築9年</option>
                      <option value="2014年(平成26年)築10年">2014年(平成26年) 築10年</option>
                      <option value="2013年(平成25年)築11年">2013年(平成25年) 築11年</option>
                      <option value="2012年(平成24年)築12年">2012年(平成24年) 築12年</option>
                      <option value="2011年(平成23年)築13年">2011年(平成23年) 築13年</option>
                      <option value="2010年(平成22年)築14年">2010年(平成22年) 築14年</option>
                      <option value="2009年(平成21年)築15年">2009年(平成21年) 築15年</option>
                      <option value="2008年(平成20年)築16年">2008年(平成20年) 築16年</option>
                      <option value="2007年(平成19年)築17年">2007年(平成19年) 築17年</option>
                      <option value="2006年(平成18年)築18年">2006年(平成18年) 築18年</option>
                      <option value="2005年(平成17年)築19年">2005年(平成17年) 築19年</option>
                      <option value="2004年(平成16年)築20年">2004年(平成16年) 築20年</option>
                      <option value="2003年(平成15年)築21年">2003年(平成15年) 築21年</option>
                      <option value="2002年(平成14年)築22年">2002年(平成14年) 築22年</option>
                      <option value="2001年(平成13年)築23年">2001年(平成13年) 築23年</option>
                      <option value="2000年(平成12年)築24年">2000年(平成12年) 築24年</option>
                      <option value="1999年(平成11年)築25年">1999年(平成11年) 築25年</option>
                      <option value="1998年(平成10年)築26年">1998年(平成10年) 築26年</option>
                      <option value="1997年(平成9年)築27年">1997年(平成9年) 築27年</option>
                      <option value="1996年(平成8年)築28年">1996年(平成8年) 築28年</option>
                      <option value="1995年(平成7年)築29年">1995年(平成7年) 築29年</option>
                      <option value="1994年(平成6年)築30年">1994年(平成6年) 築30年</option>
                      <option value="1993年(平成5年)築31年">1993年(平成5年) 築31年</option>
                      <option value="1992年(平成4年)築32年">1992年(平成4年) 築32年</option>
                      <option value="1991年(平成3年)築33年">1991年(平成3年) 築33年</option>
                      <option value="1990年(平成2年)築34年">1990年(平成2年) 築34年</option>
                      <option value="1989年(平成元年)築35年">1989年(平成元年) 築35年</option>
                      <option value="1988年(昭和63年)築36年">1988年(昭和63年) 築36年</option>
                      <option value="1987年(昭和62年)築37年">1987年(昭和62年) 築37年</option>
                      <option value="1986年(昭和61年)築38年">1986年(昭和61年) 築38年</option>
                      <option value="1985年(昭和60年)築39年">1985年(昭和60年) 築39年</option>
                      <option value="1984年(昭和59年)築40年">1984年(昭和59年) 築40年</option>
                      <option value="1983年(昭和58年)築41年">1983年(昭和58年) 築41年</option>
                      <option value="1982年(昭和57年)築42年">1982年(昭和57年) 築42年</option>
                      <option value="1981年(昭和56年)築43年">1981年(昭和56年) 築43年</option>
                      <option value="1980年(昭和55年)築44年">1980年(昭和55年) 築44年</option>
                      <option value="1979年(昭和54年)築45年">1979年(昭和54年) 築45年</option>
                      <option value="1978年(昭和53年)築46年">1978年(昭和53年) 築46年</option>
                      <option value="1977年(昭和52年)築47年">1977年(昭和52年) 築47年</option>
                      <option value="1976年(昭和51年)築48年">1976年(昭和51年) 築48年</option>
                      <option value="1975年(昭和50年)築49年">1975年(昭和50年) 築49年</option>
                      <option value="1974年(昭和49年)築50年">1974年(昭和49年) 築50年</option>
                      <option value="1973年(昭和48年)築51年">1973年(昭和48年) 築51年</option>
                      <option value="1972年(昭和47年)築52年">1972年(昭和47年) 築52年</option>
                      <option value="1971年(昭和46年)築53年">1971年(昭和46年) 築53年</option>
                      <option value="1970年(昭和45年)築54年">1970年(昭和45年) 築54年</option>
                      <option value="1969年(昭和44年)築55年">1969年(昭和44年) 築55年</option>
                      <option value="1968年(昭和43年)築56年">1968年(昭和43年) 築56年</option>
                      <option value="1967年(昭和42年)築57年">1967年(昭和42年) 築57年</option>
                      <option value="1966年(昭和41年)築58年">1966年(昭和41年) 築58年</option>
                      <option value="1965年(昭和40年)築59年">1965年(昭和40年) 築59年</option>
                      <option value="1964年(昭和39年)築60年">1964年(昭和39年) 築60年</option>
                      <option value="1963年(昭和38年)築61年">1963年(昭和38年) 築61年</option>
                      <option value="1962年(昭和37年)築62年">1962年(昭和37年) 築62年</option>
                      <option value="1961年(昭和36年)築63年">1961年(昭和36年) 築63年</option>
                      <option value="1960年(昭和35年)築64年">1960年(昭和35年) 築64年</option>
                      <option value="1959年(昭和34年)築65年">1959年(昭和34年) 築65年</option>
                      <option value="1958年(昭和33年)築66年">1958年(昭和33年) 築66年</option>
                      <option value="1957年(昭和32年)築67年">1957年(昭和32年) 築67年</option>
                      <option value="1956年(昭和31年)築68年">1956年(昭和31年) 築68年</option>
                      <option value="1955年(昭和30年)築69年">1955年(昭和30年) 築69年</option>
                      <option value="1954年(昭和29年)築70年">1954年(昭和29年) 築70年</option>
                      <option value="1953年(昭和28年)築71年">1953年(昭和28年) 築71年</option>
                      <option value="1952年(昭和27年)築72年">1952年(昭和27年) 築72年</option>
                      <option value="1951年(昭和26年)築73年">1951年(昭和26年) 築73年</option>
                      <option value="1950年(昭和25年)築74年">1950年(昭和25年) 築74年</option>
                      <option value="1949年(昭和24年)築75年">1949年(昭和24年) 築75年</option>
                      <option value="1948年(昭和23年)築76年">1948年(昭和23年) 築76年</option>
                      <option value="1947年(昭和22年)築77年">1947年(昭和22年) 築77年</option>
                      <option value="1946年(昭和21年)築78年">1946年(昭和21年) 築78年</option>
                      <option value="1945年(昭和20年)築79年">1945年(昭和20年) 築79年</option>
                      <option value="1944年(昭和19年)築80年">1944年(昭和19年) 築80年</option>
                      <option value="1943年(昭和18年)築81年">1943年(昭和18年) 築81年</option>
                      <option value="1942年(昭和17年)築82年">1942年(昭和17年) 築82年</option>
                      <option value="1941年(昭和16年)築83年">1941年(昭和16年) 築83年</option>
                      <option value="1940年(昭和15年)築84年">1940年(昭和15年) 築84年</option>
                      <option value="1939年(昭和14年)築85年">1939年(昭和14年) 築85年</option>
                      <option value="1938年(昭和13年)築86年">1938年(昭和13年) 築86年</option>
                      <option value="1937年(昭和12年)築87年">1937年(昭和12年) 築87年</option>
                      <option value="1936年(昭和11年)築88年">1936年(昭和11年) 築88年</option>
                      <option value="1935年(昭和10年)築89年">1935年(昭和10年) 築89年</option>
                      <option value="1934年(昭和9年)築90年">1934年(昭和9年) 築90年</option>
                      <option value="1933年(昭和8年)築91年">1933年(昭和8年) 築91年</option>
                      <option value="1932年(昭和7年)築92年">1932年(昭和7年) 築92年</option>
                      <option value="1931年(昭和6年)築93年">1931年(昭和6年) 築93年</option>
                      <option value="1930年(昭和5年)築94年">1930年(昭和5年) 築94年</option>
                      <option value="1929年(昭和4年)築95年">1929年(昭和4年) 築95年</option>
                      <option value="1928年(昭和3年)築96年">1928年(昭和3年) 築96年</option>
                      <option value="1927年(昭和2年)築97年">1927年(昭和2年) 築97年</option>
                      <option value="1926年(昭和元年)築98年">1926年(昭和元年) 築98年</option>
                    </select>
                  </div>
                  <p>頃</p>
                </div>
                <p class="text-[#5D0000]">おおよその時期でかまいません</p>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">現状</p>
              </div>
              <ul class="grid gap-4">
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="現状" value="ご自身またはご家族・親戚が居住中" id="居住中" />
                  <label for="居住中">ご自身またはご家族・親族が居住中</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="現状" value="賃貸中" id="賃貸中" /><label for="賃貸中">賃貸中</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="現状" value="空き家" id="空き家" /><label for="空き家">空き家</label>
                </li>
              </ul>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">あなたと売却物件との関係</p>
              </div>
              <ul class="grid gap-4">
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="あなたと売却物件との関係" value="名義人" id="名義人" /><label for="名義人">名義人</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="あなたと売却物件との関係" value="名義人に売却の同意を得た家族、親族" id="配偶者" /><label for="配偶者">名義人に売却の同意を得た家族、親族</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="あなたと売却物件との関係" value="共有名義" id="共有名義" /><label for="共有名義">共有名義</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="あなたと売却物件との関係" value="会社名義" id="会社名義" /><label for="会社名義">会社名義</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="あなたと売却物件との関係" value="弁護士、銀行担当者など、名義人・名義人の家族、親族から依頼を受けた方" id="代理人" /><label for="代理人">弁護士、銀行担当者など、名義人・名義人の家族、親族から依頼を受けた方</label>
                </li>
                <li class="flex gap-4">
                  <input class="bg-gray-300" type="radio" name="あなたと売却物件との関係" value="その他" id="その他" /><label for="その他">その他</label>
                </li>
              </ul>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-gray-500 p-1 text-white">任意</p>
                <p class="font-bold">住宅ローン残高(残債)</p>
              </div>
              <div class="flex items-center gap-4">
                <p>約</p><input type="text" name="住宅ローン残高" class="w-full bg-gray-300">
                <p class="w-[3rem]">万円</p>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-gray-500 p-1 text-white">任意</p>
                <p class="font-bold">希望買取金額</p>
              </div>
              <div class="flex items-center gap-4">
                <p>約</p><input type="text" name="希望買取金額" class="w-full bg-gray-300">
                <p class="w-[3rem]">万円</p>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">お名前</p>
              </div>
              <div class="grid gap-4">
                <p class="text-[#5D0000]">匿名での依頼は承れません</p>
                <p>例：売却 太郎</p>
                <input type="text" name="お名前" class="w-full bg-gray-300" required />
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">フリガナ</p>
              </div>
              <div class="grid gap-4">
                <p>例：バイキャク タロウ</p>
                <input type="text" name="フリガナ" class="w-full bg-gray-300" required />
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">性別</p>
              </div>
              <div class="grid gap-4">
                <div class="flex gap-4"><input class="bg-gray-300" type="radio" name="性別" id="男性" value="男性"><label for="男性">男性</label></div>
                <div class="flex gap-4"><input class="bg-gray-300" type="radio" name="性別" id="女性" value="女性"><label for="女性">女性</label></div>
                <div class="flex gap-4"><input class="bg-gray-300" type="radio" name="性別" id="回答しない" value="回答しない"><label for="回答しない">回答しない</label></div>
              </div>
            </div>
            <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
              <div class="flex items-center gap-4">
                <p class="bg-red-500 p-1 text-white">必須</p>
                <p class="font-bold">電話番号</p>
              </div>
              <div class="grid gap-4">
                <p class="text-[#5D0000]">番号の間違いがないようご確認ください</p>
                <p>例: 0312340000</p>
                <input type="text" name="電話番号" class="w-full bg-gray-300" required>
                <div class="flex gap-4">
                  <p>ご希望の連絡時間帯</p>
                  <div class="select w-[12rem] bg-gray-300">
                    <select name="ご希望の連絡時間帯">
                      <option value="9:00 - 12:00">9:00 - 12:00</option>
                      <option value="12:00 - 15:00">12:00 - 15:00</option>
                      <option value="15:00 - 18:00">15:00 - 18:00</option>
                      <option value="18:00 - 21:00">18:00 - 21:00</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
              <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
                <div class="flex items-center gap-4">
                  <p class="bg-red-500 p-1 text-white">必須</p>
                  <p class="font-bold">メールアドレス</p>
                </div>
                <div class="grid gap-4">
                  <div class="grid gap-4">
                    <p class="text-[#5D0000]">メールアドレスの間違いがないようご確認ください</p>
                    <p>例：baikyaku_t@realestate.co.jp PC、携帯どちらも可</p>
                    <input type="email" name="メールアドレス" id="メールアドレス" class="p-[10px] w-full bg-gray-300" required />
                  </div>
                  <div class="grid gap-4">
                    <p>メールアドレス（確認用）</p>
                    <input type="email" name="メールアドレス（確認用）" id="メールアドレス（確認用）" class="p-[10px] w-full bg-gray-300" required />
                    <p class="hidden text-red-400" id="email-confirmation-warning" >アドレスが異なります</p>
                  </div>
                </div>
              </div>
              <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
                <div class="flex items-center gap-4">
                  <p class="bg-gray-500 p-1 text-white">任意</p>
                  <p class="font-bold">希望する連絡方法</p>
                </div>
                <div class="flex gap-4">
                  <div class="flex gap-2">
                    <input class="bg-gray-300" type="checkbox" name="希望する連絡方法1" value="電話" id="電話" /><label for="電話">電話</label>
                  </div>
                  <div class="flex gap-2">
                    <input class="bg-gray-300" type="checkbox" name="希望する連絡方法2" value="メール" id="メール" /><label for="メール">メール</label>
                  </div>
                </div>
              </div>
              <div class="grid grid-rows-[auto_auto] md:grid-cols-[17rem_1fr] items-start gap-4 p-4 px-0 md:px-8 border-0 md:border-t-[1px] border-black">
                <div class="flex items-center gap-4">
                  <p class="bg-gray-500 p-1 text-white">任意</p>
                  <p class="font-bold">希望査定方法</p>
                </div>
                <div class="flex gap-4">
                  <div class="flex gap-2">
                    <input class="bg-gray-300" type="checkbox" name="希望査定方法1" value="机上" id="机上" /><label for="机上">机上</label>
                  </div>
                  <div class="flex gap-2">
                    <input class="bg-gray-300" type="checkbox" name="希望査定方法2" value="訪問" id="訪問" /><label for="訪問">訪問</label>
                  </div>
                </div>
              </div>
          </div>
          <div class="flex justify-center">
            <button type="submit" name="send" class="px-8 py-4 bg-[#5DADFF] hover:bg-[#0060c3] transition-all text-white text-xl font-bold">
              送信する
            </button>
          </div>
        </form>
      </div>
    </section>
  </main>
  <footer class="footer bg-[#00152A] grid text-white mt-16">
    <div class="footer__inner p-8">
      <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-8 text-sm h-36">
        <div class="flex gap-4">
          <a href="#">不動産売却</a>
          <a href="#">不動産購入</a>
          <a href="#">お問い合わせ</a>
          <a href="#">加盟店募集</a>
        </div>
        <div class="flex gap-4">
          <a href="#">プライバシーポリシー</a>
          <a href="#">ご利用規約</a>
        </div>
      </div>
    </div>
    <div class="flex justify-center py-4 border-t-[1px] w-full">
      <p class="text-xs">© 2024 Real Estate All Rights Reserved.</p>
    </div>
  </footer>
  <button id="backToTop" class="fixed bottom-7 md:bottom-10 right-7 md:right-10 text-white hidden w-10 md:w-14 h-10 md:h-14">
    <img class="opacity-75 hover:opacity-100 transition-all" src="../assets/img/backtotop-icon.png" />
  </button>
  <script src="../assets/js/script.js"></script>
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>
    AOS.init({
      duration: 1000,
      offset: 0,
      once: true,
    });

    function submitForm(event) {
          
            let form = document.getElementById("inquiriesForm");

            let email = document.getElementById("メールアドレス");
            let confirmEmail = document.getElementById("メールアドレス（確認用）");

            if (form.checkValidity()) {
                if (email.value === confirmEmail.value) {
                    form.submit();
                    document.getElementById("email-confirmation-warning").classList.add('hidden');
                } else {
                  document.getElementById("email-confirmation-warning").classList.remove('hidden');
                  event.preventDefault();
                }
            } else {
                form.reportValidity();
                event.preventDefault();
            }
        }
  </script>
</body>

</html>