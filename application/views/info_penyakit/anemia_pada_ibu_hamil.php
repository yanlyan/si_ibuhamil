<div class="card-panel card-2">
    <?php 
        echo $data['anemia_ibu_hamil'];
    ?>
    <!-- <p class="bold">Tanda-tanda</p>
    <ol>
        <li class="text-home">HB lebih rendah < 11 gr %</li>
        <li class="text-home">Penderita mengeluh lemah</li>
        <li class="text-home">Mudah pingsan sementara tekanan darah masih dan batas normal.</li>
        <li class="text-home">Malnutrisi</li>
        <li class="text-home">Pucat</li>
        <li class="text-home">Sakit kepala</li>
        <li class="text-home">Penglihatan kunang-kunang</li>
        <li class="text-home">Mudah tersinggung</li>
    </ol>

    <button id="gejala" style="float: right;" class="waves-effect waves-light btn">
        Gejala
        <i class="icon-next bg-green fg-white"></i>
    </button> -->
</div>
<script type="text/javascript">
    $("button#gejala").click(function () {
        $("#loading").show();
        $("#panel-content").empty();
        $.ajax({
            url: base_url + "/main/info_penyakit/gejala_anemia",
            type: "post",
            success: function (data) {
                setTimeout(function () {
                    $("#loading").hide();
                    $("#panel-content").html(data);
                }, 3500);
            }
        });
    });
</script>