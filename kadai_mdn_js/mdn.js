// 指定した日付を作成
const date = new Date; // 月は0から始まるので10月は「9」

// 日付をフォーマットして出力
const formattedDate = `${date.getFullYear()}年${date.getMonth() + 1}月${date.getDate()}日`;
console.log(formattedDate);
