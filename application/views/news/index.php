<table>
	<tbody>
		<tr>
			<th>name</th>
			<th>Content</th>
		</tr>

<?php foreach ($news as $single_news) { ?>
		<tr>
			<td><a href="<?php echo site_url('news/'.$single_news['id']); ?>"><?php echo $single_news['title'] ?></td>
			<td><?php echo $single_news['text'] ?></td>
		</tr>
<?php } ?>
	</tbody>
</table>