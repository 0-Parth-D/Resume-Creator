<?php
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/resume.css');
	Yii::app()->clientScript->registerCssFile(Yii::app()->baseUrl . '/css/styleguide.css');
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-widthinitial-scale=1.0">
	<title>Resume</title>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,400;0,9..40,500;1,9..40,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="designer-x">
      <div class="title">
        <div class="title-highlight"></div>
        <p class="hi-i-m-john-moore">
          <span class="text-wrapper">Hi!<br />i’m </span> <span class="span"><?php echo $model->name?></span>
        </p>
      </div>
      <div class="details">
        <div class="left-section">
          <div class="LS-contents">
            <div class="div">
              <div class="text-wrapper-2">contact</div>
              <div class="frame">
                <div class="div-2">
                  <!-- <img class="group" src="img/image.png" /> -->
                  <p class="div-3">
                    <span class="text-wrapper-3"><?php echo $model->email ?></span>
                  </p>
                </div>
                <div class="div-2">
                  <!-- <img class="img" src="img/group.png" /> -->
                  <div class="div-3"><?php echo $model->cell_number ?></div>
                </div>
              </div>
            </div>
            <div class="div">
              <div class="education">education</div>
              <div class="frame-2">
                <?php
					foreach ($model->educations as $e) {
						echo '<div class="div-4">
						<div class="frame-3">
						  <p class="b-s-arts-in-graphic">'. $e->degree .'</p>
						  <div class="text-wrapper-4">' . $e->school . '</div>
						</div>
						<div class="text-wrapper-5">' . $e->graduationYear . '</div>
					  </div>';
						
					}
				?>
              </div>
            </div>
            <div class="expertise">
              <div class="text-wrapper-2">skills</div>
              <div class="frame-4">
				<?php
					foreach ($model->skills as $e) {
						echo nl2br('<div class="text-wrapper-8">' . $e->skill_name . '</div>');
					}
				?>
              </div>
            </div>
          </div>
        </div>
        <div class="righht-section">
          <div class="work-ex">
            <p class="perfil"><span class="text-wrapper">work </span> <span class="span">experience</span></p>
            <?php
				foreach ($model->workExperiences as $e) {
					echo nl2br('<div class="div-4"><div class="text-wrapper-10">' . $e->company . '</div><div class="frame-5"><div class="lead-product">' . $e->title . '</div><img class="line" src="img/line-5.svg" /><div class="text-wrapper-11">' . $e->start_date . ' - ' . $e->end_date . '</div></div><p class="p">' .$e->description. '</p></div>');
				}
			?>
          </div>
          <div class="work-ex">
            <p class="perfil"><span class="text-wrapper">extra </span> <span class="span">curriculars</span></p>
            <?php
				foreach ($model->extraCurriculars as $e) {
					echo nl2br('<div class="div-4"><div class="frame-7"><div class="lead-product">' . $e->activity_name . '</div><img class="line" src="img/line-8.svg" /></div><p class="p">'.$e->description. '</p></div>');
				}
			?>
          </div>
        </div>
      </div>
    </div>

    
  </body>
</html>