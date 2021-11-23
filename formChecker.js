function check()
{
    var username = document.getElementById("uname");
    var password = document.getElementById("pw");
    var quantity1 = document.getElementById("quantity1");
    var i1s1 = document.getElementById("i1s1");
    var i1s2 = document.getElementById("i1s2");
    var i1s3 = document.getElementById("i1s3");
    var quantity2 = document.getElementById("quantity2");
    var quantity3 = document.getElementById("quantity3");

    if(!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(username.value)))
    {
        alert("Invalid username.");
        return false;
    }

    if(!password.value)
    {
        alert("Invalid password.");
        return false;
    }

    if(!quantity1.value || !quantity2.value || !quantity3.value)
    {
        alert("Invalid quantity.");
        return false;
    }

    if(!(i1s1.checked || i1s2.checked || i1s3.checked))
    {
        alert("Invalid shipping.");
        return false;
    }
}