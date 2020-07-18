

<table  border='0' width='100%'>
<tr>
<td><?php echo $post->title ?></td>
</tr>
<tr>
<td><?php echo $post->content ?></td>
</tr>

<tr>
<td><img style="width:200px;" src="<?php echo $post->imageUrl ?>" alt=""></td>
</tr>
<tr>
<td>Post by : <?php echo $post->username ?> on  <?php echo $post->date ?></td>
</tr>
</table>

