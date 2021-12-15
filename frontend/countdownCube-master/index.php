<!DOCTYPE html>
<html class="no-js">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title></title>
  <meta name="description" content="Personal Website of Ali Cigari, jack of all trades...">
  <meta name="viewport" content="initial-scale=1.0,width=device-width,user-scalable=0">
  <link rel="stylesheet" href="countdowncubess.css">
  <style class="inlinestyle">
    .counter {
      margin: 10 auto;
      text-align: center;
    }
  </style>
</head>

<body>



  <div id='counter' class='counter'></div>

  <div id='counter-days-only' class='counter'></div>











  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.20.1/moment.min.js"></script>
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.14/moment-timezone-with-data-2012-2022.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
  <script src="countdowncubess.js"></script>
  <script>
    var targetDate = new Date();
    targetDate.setMonth(targetDate.getMonth() + 1)
    targetDate.setDate(1)
    targetDate.setHours(11)
    targetDate.setMinutes(0)
    targetDate.setSeconds(0)
    targetDate.setMilliseconds(0);

    var targetDateStringUTC = targetDate.toISOString()
      .replace(':00.000', '');
    var targetDateString = targetDateStringUTC.replace('Z', '');

    var targetLADate = moment.tz(targetDateStringUTC,
      'America/Los_Angeles').format();
    var tzLAOffset = targetLADate.substr(-6);
    var targetDateStringOffset = targetDateString.replace('Z', '')
      .replace(':00.000', '') +
      tzLAOffset;

    var tzOldFormatOffset = targetDateString.substr(-5);
    var targetDateOldFormatString = targetDate.toLocaleDateString() +
      ' ' + tzOldFormatOffset;

    var pastDate = new Date();
    pastDate.setMonth(targetDate.getMonth() - 18)
    pastDate.setMinutes(0);
    pastDate.setSeconds(0);
    pastDate.setMilliseconds(0);
    var targetDateStringPast = pastDate.toISOString()
      .replace(':00.000', '');
    var nearFutureDate = new Date();
    nearFutureDate.setSeconds(nearFutureDate.getSeconds() + 10);
    nearFutureDate.setMilliseconds(0);
    var nearFutureDateString = nearFutureDate.toISOString()


    // reload element with jQuery
    // https://stackoverflow.com/questions/36590722/
    function reloadCounter(element_id,
      new_target,
      targetTimezone,
      cubeSize,
      background,
      color,
      onEnd,
      triggerEnd) {




    };
  </script>
  <script>
    /*       $('#counter').countdownCube( {
        target: "2020-04-08 23:59:59",
		targetTimezone: 'Asia/Dhaka',
        cubeSize: 150,
        background:  '#ffff00',
        color: 'blue',
      } );
	   */

    $('#counter-days-only').countdownCube({
      target: "2020-04-08 23:59:59",
      targetTimezone: 'Asia/Dhaka',
      cubeSize: 150,
      background: 'plum',
      color: 'red',
      labelsTranslations: {
        'year': 'anni',
        'month': 'mesi',
        'day': 'DAY',
        'hour': 'Hr',
        'minute': 'Min',
        'second': 'Sec'
      },
      showDaysOnly: true,
    });
  </script>
</body>

</html>