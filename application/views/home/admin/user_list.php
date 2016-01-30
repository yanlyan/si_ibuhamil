<table class="bordered striped responsive-table">
    <thead>
    <td>No</td>
    <td>NIK</td>
    <td>Nama</td>
    <td>Tgl Lahir</td>
    <td>Alamat</td>
    <td>Statistik</td>
</thead>
<tbody>
    <?php
    $i = 1;
    foreach ($user_list as $v) {
        ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $v['username'] ?></td>
            <td><?php echo $v['nama'] ?></td>
            <td><?php echo $v['tgl_lahir'] ?></td>
            <td><?php echo $v['alamat'] ?></td>
            <td align="center">                
                <button data-stat="<?php echo $v['id_user'] ?>" type="button" class="waves-effect waves-teal btn-floating btn-small green">
                    <i class="mdi mdi-chart-bar"></i>
                </button>
                <button data-delete="<?php echo $v['id_user'] ?>" type="button" class="waves-effect waves-teal  btn-floating btn-small red">
                    <i class="mdi mdi-delete"></i>
                </button>
                <button data-edit="<?php echo $v['id_user'] ?>" type="button" class="waves-effect waves-teal  btn-floating btn-small red">
                    <i class="mdi mdi-border-color"></i>
                </button>
            </td>
        </tr>
        <?php
        $i++;
    }
    ?>
</tbody>
</table>

<script type="text/javascript">
    $("button[data-stat]").click(function () {
        var id = $(this).attr('data-stat');
        var c = [];
        $.ajax({
            url: "<?php echo siteUrl() ?>main/user_stat",
            data: {id: id},
            dataType: 'json',
            type: 'post',
            success: function (data) {
                //console.log(data);
                $.each(data, function (i, val) {
                    c[i] = {x: new Date(parseInt(val.y), parseInt(val.m), parseInt(val.d)), y: parseFloat(val.hasil)};
                });

                var opt = {
                    title: {
                        text: "Statistik Pasien"
                    },
                    axisX: {
                        title: "Waktu Konsultasi",
                        gridThickness: 2
                    },
                    axisY: {
                        title: "Hasil"
                    },
                    animationEnabled: true,
                    data: [
                        {
                            type: "spline", //change it to line, area, column, pie, etc
                            dataPoints: c
                        }
                    ]
                };

                $("#modal-stat-show").openModal({
                    dismissible: true,
                    opacity: .5,
                    in_duration: 300,
                    out_duration: 200,
                    ready: function () {
                        $("#modal-stat").closeModal();
                    }, // Callback for Modal open
                    complete: function () {
                        $("#modal-stat").openModal();
                    } // Callback for Modal close
                });
                $("#panel_stat").CanvasJSChart(opt);
                //$("#panel_stat_parent").show('slow');
            },
            error: function () {
                alert('gagal stat..!!!');
            }
        });
    });

    $("#btn_stat_close").click(function () {
        $("#modal-stat").openModal();
    });

    $('button[data-delete]').click(function () {
        var id = $(this).attr('data-delete');
        var c = confirm("Akan Menghapus Data..?");

        if (c) {
            $.ajax({
                url: base_url + "/main/delete_user",
                type: 'post',
                data: {id: id},
                dataType: 'json',
                success: function (data) {
                    if (parseInt(data.stat) === 1) {
                        Materialize.toast("Data Pasien Berhasil Dihapus", 3500);
                    }
                    else {
                        Materialize.toast("Gagal Menghapus Data Pasien", 3500);
                    }
                },
                error: function () {
                    alert("Unknown Error..!!!");
                }
            });
        }
        else {
            return false;
        }
        /**/
    });

    $("button[data-edit]").click(function(){
        var id = $(this).attr('data-edit');        
        $('#modal-edit-user').openModal({
            dismissible: true,
            opacity: .5,
            in_duration: 300,
            out_duration: 200,
            ready: function () {
                $("#update_load_prog").show('slow');
                $("#modal-stat").closeModal();
            }, // Callback for Modal open
            complete: function () {
                $("#modal-stat").openModal();
                $("#f_edit_user").empty();
            } // Callback for Modal close
        });
        $.ajax({
            url: base_url + "/main/edit_pasien",
            type: 'post',
            data: {is_edit: 0, id: id},
            success: function(data){
                setTimeout(function(){
                    $("#f_edit_user").empty();
                    $("#update_load_prog").hide();
                    $("#f_edit_user").html(data);

                }, 2500);
            },
            error: function(){}
        });
    });
</script>