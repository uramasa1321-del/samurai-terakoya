// 定数の宣言・値の代入
const shippingFee = 500;
// shipping fee＝送料（※覚える必要はありません）

// コンソールへの出力
console.log(shippingFee)

// 値の再代入（エラー）constを入れても
 shippingFee = 800;
//  「Uncaught TypeError: Assignment to constant variable.」を翻訳すると、「未補足の型エラー：定数への代入」
// 定数に値を再代入しようとすると、このエラー文が表示される

// コンソールへの出力
console.log(shippingFee);