// スパークル
const container = document.querySelector('.sparkle-container');

function createSparkle() {
  const sparkle = document.createElement('div');
  sparkle.classList.add('sparkle');
  sparkle.style.top = Math.random() * 100 + '%';
  sparkle.style.left = Math.random() * 100 + '%';
  container.appendChild(sparkle);

  setTimeout(() => {
    sparkle.remove();
  }, 1000);
}

setInterval(createSparkle, 200);

// カウントダウン
function updateCountdown() {
  const today = new Date();
  const year = today.getMonth() === 11 ? today.getFullYear() + 1 : today.getFullYear();
  const month = today.getMonth() === 11 ? 0 : today.getMonth() + 1;
  const targetDate = new Date(year, month, 5);

  const diffTime = targetDate - today;
  const diffDays = Math.ceil(diffTime / (1000 * 60 * 60 * 24));

  document.getElementById('days').textContent = diffDays;
}

// ページ読み込み時＆毎日更新
updateCountdown();
setInterval(updateCountdown, 60 * 60 * 1000); // 1時間ごとに再計算
