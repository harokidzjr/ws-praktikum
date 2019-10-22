<form id="form-login" class="p-t-15" role="form" action="">
	<!--START Form Control-->
	<div class="form-group form-group-default">
		<label> Login</label>
		<div class="controls">
			<input type="text" name="username" placeholder="User Name" class="form-control" required>
		</div>
	</div>
	<!--END Form Control-->
	<!--START Form Control-->
	<div class="form-group form-group-default">
		<label> Password</label>
		<div class="controls">
			<input type="password" class="form-control" name="password" placeholder="Credentials" required>
		</div>
	</div>
	<!--START Form Control-->

	<!--END Form Control-->
	<button id="btn-login" class="btn btn-primary btn-cons m-t-10" type="button"> Sign in</button>
</form>

<script>
	$(function () {
        $("#btn-login").on("click",function () {
            let data = $("form").serialize();
            console.log(data);
            swal.fire({
                title: "Processing Data..",
                text: "Data sedang berkelana",
                imageUrl: '<?= base_url() ?>' + "images/loading.gif",
                showConfirmButton: false,
                allowOutsideClick: false
            });
            $.ajax({
                type: "POST",
                url: '<?= base_url() ?>' + 'login/prosesLogin',
                data: data, // serializes the form's elements.
                success: function (data) {
                    if (data === "1") {
                        window.location.replace("<?=site_url("welcome")?>");
                    } else {
                        Swal.fire("Input Data Salah", data, "error");
                    }// show response from the php script.
                }
            });
        });
    });
</script>
