<?php require "header.php"; ?>

		<main class="content">
			<div class="container">
				<h3>Production Plan Page</h3>
                <?php require "form-data.php"; ?>
                <table class="production-table">
			        <tr>
				        <th colspan="3"><?php echo date('d-M-Y'); ?></th>
				        <th colspan="6">Knit Concern Printing Unit</th>
				        <th colspan="4"><?php echo $manager; ?></th>
				        <th colspan="2">Delivery</th>
			        </tr>

			        <tr>
				        <th>Style Name</th>
				        <th>Order No.</th>
				        <th>Body color</th>
				        <th>Print Quality</th>
				        <th>Parts Name</th>
				        <th>Color Qty</th>
				        <th>Order Qty</th>
				        <th>Extra 5%</th>
				        <th>Total Qty</th>
				        <th>T-Perday</th>
				        <th>To-Day</th>
				        <th>Pro-Start</th>
				        <th>Pro-Finish</th>
				        <th>Shipment</th>
				        <th>1-Time-De</th>
			        </tr>

			        <tr>
				        <td><?php echo $style; ?></td>
				        <td><?php echo $order; ?></td>
				        <td><?php echo $body; ?></td>
				        <td><?php echo $print; ?></td>
				        <td><?php echo $parts; ?></td>
				        <td><?php echo $color; ?></td>
				        <td>
                            <?php
                                $order_qty += $color;
                                echo $order_qty;
                            ?>
                        </td>
				        <td>
                            <?php
                                $extra = ($order_qty / 20);
                                echo $extra;
                            ?>
                        </td>
				        <td>
                            <?php
                                $total_qty = $order_qty + $extra;
                                echo $total_qty;
                            ?>
                        </td>
				        <td><?php echo $tpd; ?></td>
				        <td>
                            <?php
                                $total_day = $total_qty / $tpd;
                                echo round($total_day);
                            ?>
                        </td>
				        <td><?php echo $p_s; ?></td>
				        <td><?php echo $p_f; ?></td>
				        <td><?php echo $s_d; ?></td>
				        <td>
                            <?php
                                $delevery = $tpd / 3;
                                echo round($delevery);
                            ?>
                        </td>
			        </tr>
		        </table>
			</div>
		</main> <!--/ main.content -->

<?php require "footer.php"; ?>