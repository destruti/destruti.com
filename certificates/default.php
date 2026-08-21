<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eduardo Destruti - Profile</title>
    <?php require_once '../parts/css.php'; ?>

<body>

    <!-- Banner verde do topo -->
    <div class="hero-banner"></div>

    <div class="main-container">

        <?php require_once '../parts/presentation.php'; ?>

        <div class="content-grid">

            <div class="sidebar-column">
                <?php require_once '../parts/side_box_presentation.php'; ?>
                <?php require_once '../parts/side_box_menu.php'; ?>
            </div>

            <div class="row">

                <div class="col-md-12">
                    <h1>Certificates</h1>
                </div>

                <div class="col-md-12">
                    <table class="table">

                        <?php

                        $json_data = file_get_contents('../data/certs.json');
                        $certs = json_decode($json_data, true);
                        foreach ($certs as $cert) {
                            ?>

                            <tr>
                                <td class="hidden-mobile" style="padding:10px;">
                                    <a href="<?php echo $cert['link']; ?>" target="_blank">
                                        <img src="<?php echo $cert['image']; ?>" style="width:160px;text-align:center;" />
                                    </a>
                                </td>
                                <td style="padding:10px;">
                                    <p>
                                        <strong>
                                            <?php echo $cert['title']; ?>
                                        </strong>
                                        <br /><?php echo $cert['issued']; ?>
                                        <br /><strong>Skills:</strong>
                                        <?php echo $cert['skills']; ?>

                                        <?php if ($cert['credential_id'] != null) { ?>
                                            <br /><i>Credential ID
                                                <?php echo $cert['credential_id']; ?>
                                            </i>
                                        <?php } ?>

                                        <br /><a href="<?php echo $cert['link']; ?>" target="_blank"
                                            style="font-size: 10px;">
                                            <?php echo $cert['link']; ?>
                                        </a>
                                    </p>
                                </td>
                            </tr>

                        <?php } ?>

                    </table>


                </div>

            </div>

        </div>
    </div>

</body>

</html>