function computetotal()
{
var cpizza= document.getElementById("cp").value;
var ppizza=document.getElementById("pp").value;
var vpizza=document.getElementById("vp").value;
document.getElementById("cost").value=cpizza*100+ppizza*80+vpizza*70;
}
function confirmorder()
{
confirm("your order is confirmed reach you in 10 minutes");
}
