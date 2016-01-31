<div class="card-panel card-2">
    <form action="#" id="f_konsul">
        <?php
        $no = 1;
        foreach ($konsul_reguler as $i) {
            ?>
            <div data-id="view" data-no="<?php echo $i['no_konsul']; ?>">
                <p><?php echo $i['no_konsul'] . ". " . $i['nama_konsul']; ?></p>
                <p>
                    <input data-no="<?php echo $no; ?>" class="with-gap" name="<?php echo $i['id_konsul']; ?>" type="radio" id="<?php echo $i['id_konsul']; ?>1" value="1" required>
                    <label for="<?php echo $i['id_konsul']; ?>1">Ya</label>
                </p>
                <p>
                    <input data-no="<?php echo $no; ?>" class="with-gap" name="<?php echo $i['id_konsul']; ?>" type="radio" id="<?php echo $i['id_konsul']; ?>2" value="0" required>
                    <label for="<?php echo $i['id_konsul']; ?>2">Tidak</label>
                </p>
            </div>
        <?php $no++; } ?>
        <div data-id="view" data-no="<?php echo $no; ?>">
            <p><?php echo $no; ?>. Berapa kadar HB pasien ?</p>
            <?php foreach ($konsul_khusus as $key => $khusus): ?>
                <p>
                    <input data-no="<?php echo $no; ?>" class="with-gap" name="konsul_khusus" type="radio" value="<?php echo $khusus['id_konsul']; ?>" required id="<?php echo $khusus['id_konsul']; ?>">
                    <label for="<?php echo $khusus['id_konsul']; ?>"><?php echo $khusus['nama_konsul'] ?></label>
                </p>
            <?php endforeach; ?>
        </div>
    </form>
    <ul class="pagination" id="btn_group_view" style="margin-top: 15px !important;">
    </ul>
    <div style=" float: right; bottom: 45px; right: 24px;">
        <a id="btn_send" class="btn-floating btn-large waves-effect waves-light red"><i class="mdi mdi-send"></i></a>
    </div>

</div>

<div id="modal-nilai" class="modal modal-fixed-footer">
    <div class="modal-content">
        <h4>Diagnosis</h4>
        <p id="n_diagnosis"></p>
        <h4>Tips</h4>
        <p id="n_tips"></p>
    </div>
    <div class="modal-footer">
        <a href="#!" class=" modal-action modal-close waves-effect waves-green btn-flat">Tutup</a>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function () {
        $("div[data-id = view]").hide();
        $("#btn_send").hide();
        //console.log($("div[data-id = view][data-no = 1]"));
        var v = 1;
        var n = v;
        var max = $("div[data-id = view]").length;
        init_button_nav($("#btn_group_view"), max);
        $("div[data-id = view][data-no = " + n + "]").fadeIn("slow");

        $("#btn_next").click(function () {
            if($("input.with-gap[type = radio]:checked").length < v){
                Materialize.toast('Jawab Pertanyaan No '+v, 1100);
            }
            else{
                $("[btn-view-no = " + v + "]").removeClass("grey");
                $("[btn-view-no = " + v + "]").attr("btn-view", "false");
                v++;
                $("[btn-view-no = " + v + "]").addClass("grey");
                $("[btn-view-no = " + v + "]").attr("btn-view", "true");

                if (v === max) {
                    $(this).hide();
                }
                else if (v > 1 && v < max) {
                    $("#btn_back").show();
                    $(this).show();
                }
                else {
                    $(this).show();
                }

                $("div[data-id = view][data-no = " + n + "]").toggle("slide", {direction: "left"}, 500, function () {
                    $("div[data-id = view][data-no = " + v + "]").toggle("slide", {direction: "right"}, 800);
                });
                n = v;
                if (n === max) {
                    $("#btn_send").show();
                }
                else {
                    $("#btn_send").hide();
                }
            }
        });

        $("#btn_back").click(function () {
            $("[btn-view-no = " + v + "]").removeClass("grey");
            $("[btn-view-no = " + v + "]").attr("btn-view", "false");
            v--;
            $("[btn-view-no = " + v + "]").addClass("grey");
            $("[btn-view-no = " + v + "]").attr("btn-view", "true");
            if (v === 1) {
                $(this).hide();
            }
            else if (v > 1 && v < max) {
                $("#btn_next").show();
                $(this).show();
            }
            else {
                $(this).show();
            }

            $("div[data-id = view][data-no = " + n + "]").toggle("slide", {direction: "left"}, 500, function () {
                $("div[data-id = view][data-no = " + v + "]").toggle("slide", {direction: "right"}, 800);
            });
            n = v;
            if (n === max) {
                $("#btn_send").show();
            }
            else {
                $("#btn_send").hide();
            }
        });

        $("a[btn-view]").click(function () {
            $("[btn-view = true]").removeClass("active");
            $("[btn-view = true]").attr("btn-view", "false");
            $(this).addClass("active");
            $(this).attr("btn-view", "true");

            v = parseInt($(this).text());
            if (v === max) {
                $("#btn_next").hide();
                $("#btn_back").show();
            }
            else if (v === 1) {
                $("#btn_back").hide();
                $("#btn_next").show();
            }
            else {
                $("#btn_back").show();
                $("#btn_next").show();
            }

            $("div[data-id = view][data-no = " + n + "]").toggle("slide", {direction: "left"}, 500, function () {
                $("div[data-id = view][data-no = " + v + "]").toggle("slide", {direction: "right"}, 800);
            });
            n = v;
            if (n === max) {
                $("#btn_send").show();
            }
            else {
                $("#btn_send").hide();
            }
        });
    });

    $("#btn_send").click(function () {
        var data = $("#f_konsul").serializeArray();
        var now = new Date();
        var diagnosa;
        var tips;

        if($("input.with-gap[type = radio]:checked").length < <?php echo (count($konsul_reguler)+1); ?>){
            Materialize.toast('Jawab Semua Pertanyaan..!!!', 2500);
        }
        else{
            $.ajax({
                url: "http://localhost/si_ibuhamil/index.php/Konsultasi/hitung",
                type: "POST",
                dataType: 'json',
                data: {data: data, y: now.getFullYear(), m: now.getMonth(), d: now.getDate()},
                success: function (data) {
                    $("#n_diagnosis").empty();
                    if(data.nilai <= 0.1){
                        diagnosa = "Anemia Ringan";
                    }
                    else if(data.nilai > 0.1 && data.nilai < 0.2){
                        diagnosa = "Anemia Sedang";
                    }
                    else if(data.nilai >= 0.2){
                        diagnosa = "Anemia Berat";
                    }

                    $("#n_diagnosis").text("Menurut Hasil Diagnosa Anda Menderita: "+diagnosa);
                    $("#n_tips").text(data.tips);
                    $("#modal-nilai").openModal();
                }
            });
        }
    });

    $("#btn_send2").click(function(){
        alert($("input.with-gap[type = radio]:checked").length);
    });

    function init_button_nav(selector, jml) {
        var i;
        var elem = "<li id=\"btn_back\" class=\"waves-effect waves-teal\" style=\"display: none;\"><a href=\"#!\"><i class=\"fa fa-angle-left\"><\/i><\/a><\/li>";
        for (i = 1; i <= jml; i++) {
            elem += "<li btn-view=\"true\" btn-view-no=\"" + i + "\"  class=\"waves-effect waves-light\"><a href=\"#!\" disabled>" + i + "<\/a><\/li>";
        }
        elem += "<li id=\"btn_next\" class=\"waves-effect waves-teal\"><a href=\"#!\"><i class=\"fa fa-angle-right\"><\/i><\/a><\/li>";
        selector.html(elem);
    }
</script>
