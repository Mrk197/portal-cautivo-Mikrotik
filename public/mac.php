<?php
function genrandstr($length=NULL) {
    if($length == NULL){ $length = 30; }
    $characters = 
    '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $charactersLength - 1)];
}
    return $randomString;
}
?>
<html>
    <div id='box'></div>
    <script>
    let genid = "<?php echo genrandstr(10); ?>";
    localStorage.setItem('id', genid) //to add to localStorage
    let id = localStorage.getItem('id') //to read from localStorage
    //console.log("id "+ id);
    document.getElementById("box").innerHTML = id;
    </script>
</html>