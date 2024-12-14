document.addEventListener("DOMContentLoaded", () => {
  let currentStep = 1;
  const steps = document.querySelectorAll(".question");
  const nextBtn = document.getElementById("next");
  const prevBtn = document.getElementById("prev");
  const submitBtn = document.getElementById("submit");
  const form = document.getElementById("questionnaire");

  // 現在のステップを表示
  function showStep(step) {
    steps.forEach((question) => {
      question.style.display = "none";
    });
    steps[step - 1].style.display = "block";

    prevBtn.disabled = step === 1;
    nextBtn.style.display = step === steps.length ? "none" : "inline-block";
    submitBtn.style.display = step === steps.length ? "inline-block" : "none";
  }

  // 現在のすべての質問が回答済みかチェック
  function checkAllAnswered() {
    let allAnswered = true;

    steps.forEach((step) => {
      const radios = step.querySelectorAll('input[type="radio"]');
      const isChecked = Array.from(radios).some((radio) => radio.checked);

      if (!isChecked) {
        allAnswered = false;
      }
    });

    // 全ての質問に回答済みなら送信ボタンを有効化
    submitBtn.disabled = !allAnswered;
  }

  // 次へボタン
  nextBtn.addEventListener("click", () => {
    if (currentStep < steps.length) {
      currentStep++;
      showStep(currentStep);
    }
  });

  // 前へボタン
  prevBtn.addEventListener("click", () => {
    if (currentStep > 1) {
      currentStep--;
      showStep(currentStep);
    }
  });

  // ラジオボタンの状態を監視して回答チェックを更新
  form.addEventListener("input", () => {
    checkAllAnswered();
  });

  // フォーム送信時の最終バリデーション
  form.addEventListener("submit", (event) => {
    if (submitBtn.disabled) {
      event.preventDefault();
      alert("すべての質問に回答してください。");
    }
  });

  // 初期表示
  showStep(currentStep);
  checkAllAnswered(); // 初期状態でボタン状態を確認
});
