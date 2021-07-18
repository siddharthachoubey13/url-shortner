<!DOCTYPE html>
<html>

<body>
	<table border="1" width="100%" CELLPADDING="4" CELLSPACING="3">
		<tr>
			<th COLSPAN="3"><br>
				<h3>Shortend URLs List</h3>
			</th>
		</tr>
		<tr>
			<th>Original URLs</th>
			<th>Shortend URLs</th>
			<th>CLICK COUNT</th>
		</tr>
		<?php foreach ($data as $key => $value) {
			$shortUrl = SHORT_URL . base64_encode($value['id']);
		?>
			<tr ALIGN="CENTER">
				<td><?= $value['url'] ?></td>
				<td><a target="_blank" href="<?= $shortUrl ?>"><?= $shortUrl ?></a></td>
				<td><?= $value['click_count'] ?></td>
			</tr>
		<?php } ?>
	</table>
</body>

</html>