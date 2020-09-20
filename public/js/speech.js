const utterance = new SpeechSynthesisUtterance();
const input1    = document.querySelector('#text1');
// const button    = document.querySelector('button');
document.getElementById("text1").onclick = function () {
  utterance.text = input1.value;
  utterance.lang = 'ko-KO';
  speechSynthesis.speak(utterance);
};

const input2     = document.querySelector('#text2');
document.getElementById("text2").onclick = function () {
    utterance.text = input2.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};

const input3     = document.querySelector('#text3');
document.getElementById("text3").onclick = function () {
    utterance.text = input3.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};


const input4     = document.querySelector('#text4');
document.getElementById("text4").onclick = function () {
    utterance.text = input4.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};


const input5     = document.querySelector('#text5');
document.getElementById("text5").onclick = function () {
    utterance.text = input5.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};


const input6     = document.querySelector('#text6');
document.getElementById("text6").onclick = function () {
    utterance.text = input6.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};

const input7     = document.querySelector('#text7');
document.getElementById("text7").onclick = function () {
    utterance.text = input7.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};

const input8     = document.querySelector('#text8');
document.getElementById("text8").onclick = function () {
    utterance.text = input8.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};

const input9     = document.querySelector('#text9');
document.getElementById("text9").onclick = function () {
    utterance.text = input9.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};

const input10     = document.querySelector('#text10');
document.getElementById("text10").onclick = function () {
    utterance.text = input10.value;
    utterance.lang = 'ko-KO';
    speechSynthesis.speak(utterance);
};