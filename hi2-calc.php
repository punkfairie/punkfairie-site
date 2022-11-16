<h3>horse isle 2 stat calculator</h3>

<p>First number is base (white number), second is genetic (number within parenthesis).</p>

<form name="hi2-calc" id="hi2-calc">
    <div id="stats">
        <div class="stat">
            <label for="base-agi">AGI</label>
            <input type="text" name="base-agi" id="base-agi" required>
            <input type="text" name="gen-agi" id="gen-agi" required>
        </div>
        <div class="stat">
            <label for="base-con">CON</label>
            <input type="text" name="base-con" id="base-con" required>
            <input type="text" name="gen-con" id="gen-con" required>
        </div>
        <div class="stat">
            <label for="base-end">END</label>
            <input type="text" name="base-end" id="base-end" required>
            <input type="text" name="gen-end" id="gen-end" required>
        </div>
        <div class="stat">
            <label for="base-int">INT</label>
            <input type="text" name="base-int" id="base-int" required>
            <input type="text" name="gen-int" id="gen-int" required>
        </div>
        <div class="stat">
            <label for="base-spd">SPD</label>
            <input type="text" name="base-spd" id="base-spd" required>
            <input type="text" name="gen-spd" id="gen-spd" required>
        </div>
        <div class="stat">
            <label for="base-str">STR</label>
            <input type="text" name="base-str" id="base-str" required>
            <input type="text" name="gen-str" id="gen-str" required>
        </div>
    </div>

    <div class="btns">
        <input type="submit" name="submit" id="submit" value="calculate">
        <input type="reset" name="reset" id="reset" value="reset">
    </div>
</form>

<div class="divide"></div>

<h3>results</h3>

<b>base:</b> <span id="base"></span><br>
<b>genetic:</b> <span id="gen"></span>

<script type="text/javascript">

    $(document).ready(function() {
        $("#hi2-calc").submit(function(event) {
            var base = 0;
            var baseInput = [];
            var gen = 0;
            var genInput = [];

            event.preventDefault();

            baseInput.push(Number($("#base-agi").val()));
            baseInput.push(Number($("#base-con").val()));
            baseInput.push(Number($("#base-end").val()));
            baseInput.push(Number($("#base-int").val()));
            baseInput.push(Number($("#base-spd").val()));
            baseInput.push(Number($("#base-str").val()));

            genInput.push(Number($("#gen-agi").val()));
            genInput.push(Number($("#gen-con").val()));
            genInput.push(Number($("#gen-end").val()));
            genInput.push(Number($("#gen-int").val()));
            genInput.push(Number($("#gen-spd").val()));
            genInput.push(Number($("#gen-str").val()));

            baseInput.forEach(function(value) {
                base += value * 2;
            });

            genInput.forEach(function(value) {
                gen += value;
            });

            $("#base").text(base);
            $("#gen").text(gen);
        });
    });
</script>