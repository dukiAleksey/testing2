
<!DOCTYPE html>
<html>
<body>

<form action="result.php" method="post" enctype="multipart/form-data">
    <h1>Task - 2. Duki Aleksey</h1>
    <hr>
    <p>Select image to upload:</p>
    <input type="file" name="fileToUpload" id="fileToUpload"><br/>
    <input type="text" name="labeltext" value="Enter watermark text"><br/>
    <p>Select text size:</p>
    <select name="fontsize" id="fontsize" name="fontsize">
        <option value="14">14</option>
        <option value="20">20</option>
        <option selected value="30">30</option>
    </select>
    <button type="submit" value="Upload Image" name="submit">Get Result!</button>
</form>
<style>
    form{
        width: 100%;
        max-width: 400px;
        margin: 0 auto;
        background-color: #f5f5f5;
        padding: 40px;
    }
    input,button,select{
        margin-bottom: 30px;
        width: 100%;
        padding: 10px 0;
    }
</style>
</body>
</html>