// output-btnというidを持つHTML要素を取得し、定数に代入する
const btn = document.getElementById('output-btn');

// HTML要素がクリックされたときにイベント処理を実行する
btn.addEventListener('click', () => {
  console.log('クリックされました！');
});


 // add-btnというidを持つHTML要素を取得し、定数に代入する
 const addBtn = document.getElementById('add-btn');
 // parent-listというidを持つHTML要素を取得し、定数に代入する
 const parentList = document.getElementById('parent-list');


//  1.li要素を新しく作成する
// 2.作成したli要素に「これはリスト要素です」というテキストを追加する
// 3.作成したli要素をul要素の子要素として末尾に追加する
// メソッド	処理の内容
// addEventListener()	イベント処理を実行する
// createElement()	HTML要素を新しく作成する
// appendChild()	HTML要素を子要素として末尾に追加する
// プロパティ	値
// textContent	HTML要素内のテキスト

 // HTML要素がクリックされたときにイベント処理を実行する
 addBtn.addEventListener('click', () => {
  // li要素を新しく作成する
  const childList = document.createElement('li');
   // 作成したli要素に「これはリスト要素です」というテキストを追加する
   childList.textContent = '私はあすまが好きです';
 // 作成したli要素をul要素の子要素として末尾に追加する
 parentList.appendChild(childList);
});