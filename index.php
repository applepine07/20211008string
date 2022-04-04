<?php
// ▲substr
// ●substr(字串 , 取幾個字)．2個參數

echo substr("abcde", -1); 
// ↑↑↑這樣會輸出 e，因為從字尾開始算一個字母。
echo "<hr>";
echo substr("abcde", -2);  
// ↑↑↑這樣會輸出 de，因為從字尾開始算，共取兩個字母。

echo "<hr>";

// ●substr(字串 , 起始值 , 取幾個字)，3個參數
echo substr("abcd", -3, 1); 
// ↑↑↑這樣會輸出 b，因為從字尾開始算，先取三個字母為 bcd，接著長度在從 bcd 取 1 位。
echo "<hr>";
echo substr("abcdef", 0, -1); 
// ↑↑↑這樣會輸出 abcde，因為程式先從零開始取整段字串，長度再由字串尾扣掉一個。
echo "<hr>";
echo substr("abcdef", 2, -1); 
// ↑↑↑這樣會輸出 cde，因為程式先從第二個字元開始，取得 cdef 這幾個字，再由取得的字串尾扣掉一個。
echo "<hr>";
echo "falseexample";
echo substr("abcdef", 5, -2); 
// ↑↑↑這樣會回傳 false，因為程式一開始先取得 f，然後扣掉五個字元，就什麼都沒有囉！
echo "<hr>";
echo substr("abcdef", -4, -2); 
// ↑↑↑這樣會輸出 cd，因為程式先取得 cdef 這四個字元，再從其中的字尾開始扣掉兩個字元。

echo "<hr>";

// ●mb_substr(①要判斷的字串，②初始字串位置用整數，③要取得的字串結束位置，④編碼)，4個參數
// 英文
$string=mb_substr ("abcdef", 0, 2);
echo $string;
echo "<hr>";
// 中文
$string=mb_substr ("今天好天氣", 0, 2);
echo $string;

echo "<hr>";

echo "<h2>用for及mb_strlen、mb_substr尋找字元</h2>";
$str = "Today is a good day to play.";
$find = "p";

echo "$str<br>";

for ($i = 0; $i < mb_strlen($str); $i++) {
    // mb_substr(①要判斷的字串，②初始字串位置用整數，③要取得的字串結束位置)
    if (mb_substr($str, $i, 1) == $find) {
        echo "<br>";
        echo "你要找的字「" . $find . "」在第「" . ($i + 1) . "」個位置";
        break;
    }
    echo "$i&nbsp;";
}
echo "<h2>用for及mb_strlen、mb_substr尋找字串</h2>";
$str = "Today is a good day to play.";
$find = "good";

echo "$str<br>";

for ($i = 0; $i < mb_strlen($str); $i++) {
    // mb_substr(①要判斷的字串，②初始字串位置用整數，③要取得的字串結束位置)
    if (mb_substr($str, $i, mb_strlen($find)) == $find) {
        echo "<br>";
        echo "你要找的字「" . $find . "」在第「" . ($i + 1) . "」個位置";
        break;
    }
    echo "$i&nbsp;";
}

echo "<hr>";
echo "<h2>用while及mb_strlen、mb_substr尋找字串</h2>";
$str = "Today is a good day to play.<br>";
$find = "good";
$pos = 0;
$count = 0;

echo "$str";
    // mb_substr(①要判斷的字串，②初始字串位置用整數，③要取得的字串結束位置)
while (mb_substr($str, $pos, mb_strlen($find)) != $find) {
    $pos = $pos + 1;
    $count++;
}

echo "你要找的字串「" . $find . "」在第「" . ($pos + 1) . "」個位置";
echo "<br>";
echo "迴圈跑了" . $count . "次才找到";
echo "<hr>";
// -----------

// ●strpos
// 中文一字3字元，0123…
$str="今天好天氣";
$find="氣";
echo strpos($str, $find);

echo "<hr>";

// 英文一字1字元，0123
$str="abcde";
$find="e";
echo strpos($str, $find);


?>