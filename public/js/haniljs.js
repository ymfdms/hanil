let answer =null;
let question = null;

document.getElementById("a1").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    answer = document.choice1.a1.value;
    if(answer==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a1.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
    }
}

document.getElementById("a2").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    answer = document.choice1.a2.value;
    if(answer==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a2.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
    }
}

document.getElementById("a3").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    answer = document.choice1.a3.value;
    if(answer==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a3.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
    }
}

document.getElementById("a4").onclick = function() {
    
    document.getElementById("a1").disabled = true;
    document.getElementById("a2").disabled = true;
    document.getElementById("a3").disabled = true;
    document.getElementById("a4").disabled = true;
    
    answer = document.choice1.a4.value;
    if(answer==null){
        alert("nullが含まれています");
    }
    if(document.choice1.a4.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="flex";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="flex";
    }
}

document.getElementById("result-correct").onclick = function() {
    // エレメントを作成
    var ele = document.createElement('input');
    // データを設定
    ele.setAttribute('type', 'hidden');
    ele.setAttribute('name', 'answer2');
    ele.setAttribute('value', answer);
    
    var f = document.getElementById("correct_myform");
    f.appendChild(ele);
    
    f.submit();
}

document.getElementById("result-incorrect").onclick = function() {
    // エレメントを作成
    var ele = document.createElement('input');
    // データを設定
    ele.setAttribute('type', 'hidden');
    ele.setAttribute('name', 'answer2');
    ele.setAttribute('value', answer);
    
    var f = document.getElementById("incorrect_myform");
    f.appendChild(ele);
    
    f.submit();
}
