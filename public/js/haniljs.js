document.getElementById("a1").onclick = function() {
    if(document.choice1.a1.value == document.choice1.ans.value){
        document.getElementById( 'result-correct' ).style.display="block";
    }
    else{
        document.getElementById( 'result-incorrect' ).style.display="block";
    }
}

