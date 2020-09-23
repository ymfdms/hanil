// let answer =null;
// let question = null;
let check = null;

document.getElementById("a1").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    // answer = document.choice1.a1.value;
    check =document.choice1.ans.value;
    if(check==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a1.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
        document.getElementById( 'correct-myform' ).style.display="flex";
        document.getElementById( 'maru' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
        document.getElementById( 'incorrect-myform' ).style.display="flex";
        document.getElementById( 'batsu' ).style.display="flex";
    }
}

document.getElementById("a2").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    // answer = document.choice1.a2.value;
    check =document.choice1.ans.value;
    if(check==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a2.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
        document.getElementById( 'correct-myform' ).style.display="flex";
        document.getElementById( 'maru' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
        document.getElementById( 'incorrect-myform' ).style.display="flex";
        document.getElementById( 'batsu' ).style.display="flex";
    }
}

document.getElementById("a3").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    // answer = document.choice1.a3.value;
    check =document.choice1.ans.value;
    if(check==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a3.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
        document.getElementById( 'correct-myform' ).style.display="flex";
        document.getElementById( 'maru' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
        document.getElementById( 'incorrect-myform' ).style.display="flex";
        document.getElementById( 'batsu' ).style.display="flex";
    }
}

document.getElementById("a4").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    // answer = document.choice1.a4.value;
    check =document.choice1.ans.value;
    if(check==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a4.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
        document.getElementById( 'correct-myform' ).style.display="flex";
        document.getElementById( 'maru' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
        document.getElementById( 'incorrect-myform' ).style.display="flex";
        document.getElementById( 'batsu' ).style.display="flex";
    }
}

document.getElementById("correct-myform").onclick = function () {
    document.getElementById("correct-myform").disabled = true;
    // エレメントを作成
    var ele = document.createElement('input');
    // データを設定
    ele.setAttribute('type', 'hidden');
    ele.setAttribute('name', 'answer2');
    ele.setAttribute('value', check);

    var f = document.getElementById("correct-myform");
    f.appendChild(ele);

    f.submit();
}

document.getElementById("incorrect-myform").onclick = function() {
    document.getElementById("incorrect-myform").disabled = true;
    // エレメントを作成
    var ele = document.createElement('input');
    // データを設定
    ele.setAttribute('type', 'hidden');
    ele.setAttribute('name', 'answer2');
    ele.setAttribute('value', check);
    
    var f = document.getElementById("incorrect-myform");
    f.appendChild(ele);
    
    f.submit();
}
