let showAnswers = document.querySelectorAll(".questionExtendAnswer");

showAnswers.forEach((question, index) => {
    question.addEventListener('click', function() {
        let plus = question.querySelector("#extendAnswer");
        let answer = question.nextElementSibling;

        if (plus.innerHTML.trim() === "+") {
            answer.style.display = "block";
            plus.innerHTML = "-";
        } else {
            answer.style.display = "none";
            plus.innerHTML = "+";
        }
    });
});
