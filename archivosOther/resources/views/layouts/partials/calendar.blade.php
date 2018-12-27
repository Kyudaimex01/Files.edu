<style>
    @import 'https://fonts.googleapis.com/css?family=Lato:300,300i,900,900i';
    .txt__normal     { font-family: 'Lato', sans-serif; font-weight: 400; }
    .txt__normal--it { .txt__normal; font-style: italic; }
    .txt__bold       { font-family: 'Lato', sans-serif; font-weight: 900; }
    .txt__bold--it   { .txt__bold; font-style: italic; }
    .txt__awesome    { font: normal normal normal 14px/1 FontAwesome; }

    /* VARIABLES ================================================*/

    @col__black: fade(#000000, 90%);
    @col__white: #ffffff;
    @col__grey: fade(@col__black, 10%);
    @col__lightgrey: #F5F5F5;
    @col__blu: #00407b;
    @col__red: #F57170;
    @col__green:#10DDC2;
    @col__yellow: #FACC2E;

    @sz__small: 13px;
    @sz__medium: 16px;
    @sz__large: 28px;

    @mr__small: 20px;
    @mr__medium: 30px;
    @mr__large: 50px;

    @headerH: 80px;
    @asideW: 300px;

    @letter-spacing: 2px;

    @zindex-1:  10;
    @zindex-2:  20;
    @zindex-3:  30;
    @zindex-4:  40;
    @zindex-5:  50;
    @zindex-top:100;

    @border-radius: 6px;

    /* RESPONSIVE ================================================*/

    @mq__smartphone: ~"(max-width: 1024px)";

    /* ===========================================================*/
    body {
      position: realative;
      height: 100%;
      &.overlay {
        &:before {
          position: absolute;
          content: '';
          display: block;
          top: 0;
          left: 0;
          right: 0;
          bottom:0;
          background-color: fade(@col__black, 40%);
          z-index: @zindex-top;
        }
      }
    }

    html {
      height: 100%;
      background: darken(@col__blu, 4%);
      color: @col__white;
      font-size: @sz__small;
      .txt__normal;
    }

    .wrapper {
      position: relative;
      max-width: 1280px;
      width: 100%;
      height: 100%;
      margin: 0 auto;
    }

    a {
      color: inherit;
      text-decoration: none;
    }
    /* UTILITY ===========================================================*/

     //*:hover { outline: 1px solid red; }

    //border box
    .u-border-box {
        box-sizing        : border-box;
        -moz-box-sizing   : border-box;
        -webkit-box-sizing: border-box;
    }

    // transform
    .u-transform (@handler) {
        transform        : @handler;
        -webkit-transform: @handler;
    }
    // horizontal center
    .u-horizontal-center (@mleft) {
        left       : 50%;
        margin-left: @mleft;
    }
    // border radius
    .u-border-radius (@radius) {
        border-radius        : @radius;
        -webkit-border-radius: @radius;
    }
    // shadow
    .u-shadow (@shadow-h: 0, @shadow-v: 0, @shadow-b: 30px, @shadow-s: 0, @shadow-col: fade(@col__black, 18%)) {
        box-shadow        : @shadow-h @shadow-v @shadow-b @shadow-s @shadow-col;
        -webkit-box-shadow: @shadow-h @shadow-v @shadow-b @shadow-s @shadow-col;
    }

    .u-transition {
      transition: all 0.4s cubic-bezier(0.4, 0.0, 0.2, 1);
      -webkit-transition: all 0.4s cubic-bezier(0.4, 0.0, 0.2, 1);
      &.long {
        transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
        -webkit-transition: all 0.8s cubic-bezier(0.4, 0.0, 0.2, 1);
      }
      &.elastic {
        transition: all 0.25s cubic-bezier(0.175, 0.885, 0.320, 1.275);
        -webkit-transition: all 0.25s cubic-bezier(0.175, 0.885, 0.320, 1.275);
      }
    }

    .resetDefaultApparence {
        -webkit-appearance: none;
        -moz-appearance: none;
        -ms-appearance: none;
        appearance: none;
        border-radius: 0px;
        padding: 0;
        border-width: 0;
        resize: none;
        &::-ms-expand {
            display: none;
        }
    }

    /* STYLE ===========================================================*/
    header {
      position: fixed;
        height: @headerH;
        width: 100%;
        z-index: @zindex-5;
        background: darken(@col__blu, 4%);
      & > .wrapper {
          display: flex;
          justify-content: space-between;
          align-items: center;
          padding:0 @mr__small;
          .u-border-box;
          color: @col__white;
          letter-spacing: @letter-spacing;
          font-size: @sz__small;
          a {
            color: @col__white;
            text-decoration: none;
            margin-left: @mr__small/2;
          }
        }
    }
    .c-monthyear {
      display: flex;
    }
    .c-month {
      position: relative;
      height: @headerH;
      line-height: @headerH;



      #c-paginator {
        position: relative;
        width: 200px;
        display: block;
        height: @headerH;
        line-height: @headerH;
        text-align: center;
        overflow: hidden;
        .c-paginator__month {
          position: absolute;
          width: 200px;
          top: 0;
          bottom: 0;
          right: 0;
          &:nth-child(1) {
            left: 0;
          }
          &:nth-child(2) {
            left: 200px;
          }
          &:nth-child(3) {
            left: 400px;
          }
          &:nth-child(4) {
            left: 600px;
          }
          &:nth-child(5) {
            left: 800px;
          }
          &:nth-child(6) {
            left: 1000px;
          }
          &:nth-child(7) {
            left: 1200px;
          }
          &:nth-child(8) {
            left: 1400px;
          }
          &:nth-child(9) {
            left: 1600px;
          }
          &:nth-child(10) {
            left: 1800px;
          }
          &:nth-child(11) {
            left: 2000px;
          }
          &:nth-child(12) {
            left: 2200px;
          }
        }

      }

      .prev, .next {
        position: absolute;
        display: block;
        top: 50%;
        width: @mr__medium;
        height: @mr__medium;
        padding: 9px 12px;
        background-color: lighten(@col__blu, 4%);
        cursor: pointer;
        z-index: @zindex-1;
        .u-border-box;
        .u-transform(translatey(-50%));
        .u-border-radius(50%);
        .u-transition;
      }
      .prev {
        left: 0;
        &:hover {
          padding: 9px 10px;
          background-color: lighten(@col__blu, 8%);
        }
      }
      .next {
        right: 0;
        &:hover {
          padding: 9px 14px;
          background-color: lighten(@col__blu, 8%);
        }
      }
    }

    .c-paginator__year {
      height: @headerH;
      line-height: @headerH;
      padding: 0 @mr__small;
    }

    .o-btn {
      display: inline-block;
      padding: 0 10px;
      line-height: @mr__medium;
      height: @mr__medium;
      background-color: lighten(@col__blu, 4%);
      text-transform: uppercase;
      letter-spacing: @letter-spacing;
      .u-border-radius(@mr__medium/2);
      .u-transition;

      span {
        margin-left: 10px;
      }

      &:hover {
        background-color: lighten(@col__blu, 8%);
      }
    }

    //calendar
    .c-calendar {
      padding-top: @headerH;
      display: flex;
      justify-content: space-between;
      flex-direction: row;
    }

    .c-calendar__style {
      background-color: @col__blu;
      margin: @mr__small;
      padding: @mr__small/2;
      .u-shadow;
      .u-border-radius(@border-radius);
    }

    .c-cal__container {
      position: relative;
      width: calc(100% ~"-" @asideW);
      height: 0;
      padding-bottom: 65%;
      overflow: hidden;
    }

    .c-main {
      position: absolute;
      top: 0;
      left: 0;
      bottom: 0;
      right: 0;
      width: 100%;
      padding: 10px;
      .u-border-box;
      &-01 {
        left: 0;
      }
      &-02 {
        left: 100%;
      }
      &-03 {
        left: 200%;
      }
      &-04 {
        left: 300%;
      }
      &-05 {
        left: 400%;
      }
      &-06 {
        left: 500%;
      }
      &-07 {
        left: 600%;
      }
      &-08 {
        left: 700%;
      }
      &-09 {
        left: 800%;
      }
      &-10 {
        left: 900%;
      }
      &-11 {
        left: 1000%;
      }
      &-12 {
        left: 1100%;
      }
    }

    .c-cal__row {
      display: flex;
      justify-content: flex-start;

    }

    //info column element
    .c-cal__col {
      width: calc(100% ~"/" 7);
      text-align: center;
      height: @mr__large;
      line-height: @mr__large;
      letter-spacing: @letter-spacing;
      text-transform: uppercase;
    }

    //cel element
    .c-cal__cel {
      position: relative;
      width: calc(100% ~"/" 7);
      text-align: center;
      cursor: pointer;
      .u-border-radius(50%);
      .u-transition.long;
      p {
        position: absolute;
        margin: 0;
        top: 50%;
        left:50%;
        width: @mr__small*2;
        height: @mr__small*2;
        line-height: @mr__small*2;
        background: lighten(@col__blu, 2%);
        .u-transform(translate(-50%, -50%));
        .u-border-radius(50%);
        .u-transition.long;
      }

      //responsive square
      &::before{
        content: "";
        display: block;
        padding-top: 100%;
      }

      //weekend color
       &:nth-child(1) {
         p {
            background: fade(darken(@col__red, 25%), 20%);
         }
      }
      &:nth-child(7) {
         p {
            background: darken(@col__blu, 2%);
         }
      }


      &:hover {
        background-color: lighten(@col__blu, 4%)!important;
          p {
            background: darken(@col__blu, 2%)!important;
         }
      }

      //on click
      &.isSelected {
        background-color: lighten(@col__blu, 4%);
        p {
          background: darken(@col__blu, 2%);
        }
      }
      &.isToday {
            background-color: fade(@col__red, 20%);
        p {
          background: fade(@col__red, 40%);
        }
      }
      //not this month
      &.other_month {
        color: fade(@col__white, 20%);
      }
    }

    //event indicator style
    .event {
      &:before {
        position: absolute;
        content: '';
        display: block;
        width: @mr__small/2;
        height: @mr__small/2;
        background-color: @col__lightgrey;
        z-index: @zindex-1;
        padding: 0;
        top: 50%;
        left: 50%;
        .u-border-radius(50%);
        .u-transform(translate(-50%, calc(50% ~"+" @mr__small/2)));
      }

      &--birthday {
        &:before {
          background-color: @col__yellow;
        }
      }
      &--festivity {
         &:before {
          background-color: @col__green;
        }

      }
      &--important {
         &:before {
          background-color: @col__red;
        }
      }
    }

    // aside
    .c-aside {
      width: @asideW;
      padding: @mr__small;
    }
    .c-aside__day {
      font-size: @sz__large;
      margin: @mr__large 0;
      .c-aside__num {
        .txt__bold;
      }
    }
    .c-aside__event {
      position: relative;
      padding-left: @mr__small;
      margin: @mr__small 0;

      &:before {
        position: absolute;
        display: block;
        content: '';
        width: 16px;
        height: 16px;
        left: 0;
        background-color: @col__lightgrey;
        .u-border-radius(50%);
      }
      &--birthday {
        &:before {
          background-color: @col__yellow;
        }
      }
      &--festivity {
        &:before {
          background-color: @col__green;
        }
      }
      &--important {
        &:before {
          background-color: @col__red;
        }
      }
    }

    .c-event__creator {
      position: absolute;
      top: 50%;
      left: 50%;
      max-width: 500px;
      max-height: 470px;
      width: 100%;
      height: 100%;
      z-index: @zindex-top;
      padding: @mr__small;
      visibility: hidden;
      opacity: 0;
      .u-transition;
      .u-border-box;
      .u-transform(translate(-50%, -50%)scale(0.9));

      form {
        display: flex;
        flex-direction: column;
        align-items: flex-start;
        justify-content: space-between;
      }

      &.isVisible {
          .u-transform(translate(-50%, -50%)scale(1));
        opacity: 1;
        visibility: visible;
      }
    }

    input, textarea, select {
      .resetDefaultApparence;
      margin: 10px 0;
      padding: 10px;
      width: 100%;
      .u-border-radius(20px);
      .u-border-box;
    }

    input {
      height: 40px;
    }

    </style>

<script>
  // fill the month table with column headings
function day_title(day_name) {
    document.write("<div class='c-cal__col'>" + day_name + "</div>");
  }
  // fills the month table with numbers
function fill_table(month, month_length, indexMonth) {
    day = 1;
    // begin the new month table
    document.write("<div class='c-main c-main-" + indexMonth + "'>");
    //document.write("<b>"+month+" "+year+"</b>")

    // column headings
    document.write("<div class='c-cal__row'>");
    day_title("Sun");
    day_title("Mon");
    day_title("Tue");
    day_title("Wed");
    day_title("Thu");
    day_title("Fri");
    day_title("Sat");
    document.write("</div>");

    // pad cells before first day of month
    document.write("<div class='c-cal__row'>");
    for (var i = 1; i < start_day; i++) {
      if (start_day > 7) {
      } else {
        document.write("<div class='c-cal__cel'></div>");
      }
    }

    // fill the first week of days
    for (var i = start_day; i < 8; i++) {
      document.write(
        "<div data-day='2017-" +
          indexMonth +
          "-0" +
          day +
          "'class='c-cal__cel'><p>" +
          day +
          "</p></div>"
      );
      day++;
    }
    document.write("</div>");

    // fill the remaining weeks
    while (day <= month_length) {
      document.write("<div class='c-cal__row'>");
      for (var i = 1; i <= 7 && day <= month_length; i++) {
        if (day >= 1 && day <= 9) {
          document.write(
            "<div data-day='2017-" +
              indexMonth +
              "-0" +
              day +
              "'class='c-cal__cel'><p>" +
              day +
              "</p></div>"
          );
          day++;
        } else {
          document.write(
            "<div data-day='2017-" +
              indexMonth +
              "-" +
              day +
              "' class='c-cal__cel'><p>" +
              day +
              "</p></div>"
          );
          day++;
        }
      }
      document.write("</div>");
      // the first day of the next month
      start_day = i;
    }

    document.write("</div>");
  }
</script>
<header>
  <div class="wrapper">
    <div class="c-monthyear">
    <div class="c-month">
        <span id="prev" class="prev fa fa-angle-left" aria-hidden="true"></span>
        <div id="c-paginator">
          <span class="c-paginator__month">JANUARY</span>
          <span class="c-paginator__month">FEBRUARY</span>
          <span class="c-paginator__month">MARCH</span>
          <span class="c-paginator__month">APRIL</span>
          <span class="c-paginator__month">MAY</span>
          <span class="c-paginator__month">JUNE</span>
          <span class="c-paginator__month">JULY</span>
          <span class="c-paginator__month">AUGUST</span>
          <span class="c-paginator__month">SEPTEMBER</span>
          <span class="c-paginator__month">OCTOBER</span>
          <span class="c-paginator__month">NOVEMBER</span>
          <span class="c-paginator__month">DECEMBER</span>
        </div>
        <span id="next" class="next fa fa-angle-right" aria-hidden="true"></span>
      </div>
      <span class="c-paginator__year">2017</span>
    </div>
    <div class="c-sort">
      <a class="o-btn c-today__btn" href="javascript:;">TODAY</a>
    </div>
  </div>
</header>
<div class="wrapper">
  <div class="c-calendar">
    <div class="c-calendar__style c-aside">
      <a class="c-add o-btn js-event__add" href="javascript:;">add event <span class="fa fa-plus"></span></a>
      <div class="c-aside__day">
        <span class="c-aside__num"></span> <span class="c-aside__month"></span>
      </div>
      <div class="c-aside__eventList">
      </div>
    </div>
    <div class="c-cal__container c-calendar__style">
      <script>

      // CAHNGE the below variable to the CURRENT YEAR
      year = 2017;

      // first day of the week of the new year
      today = new Date("January 1, " + year);
      start_day = today.getDay() + 1;
      fill_table("January", 31, "01");
      fill_table("February", 28, "02");
      fill_table("March", 31, "03");
      fill_table("April", 30, "04");
      fill_table("May", 31, "05");
      fill_table("June", 30, "06");
      fill_table("July", 31, "07");
      fill_table("August", 31, "08");
      fill_table("September", 30, "09");
      fill_table("October", 31, "10");
      fill_table("November", 30, "11");
      fill_table("December", 31, "12");
      </script>
    </div>
  </div>

  <div class="c-event__creator c-calendar__style js-event__creator">
    <a href="javascript:;" class="o-btn js-event__close">CLOSE <span class="fa fa-close"></span></a>
    <form id="addEvent">
      <input placeholder="Event name" type="text" name="name">
      <input type="date" name="date">
      <textarea placeholder="Notes" name="notes" cols="30" rows="10"></textarea>
      <select name="tags">
          <option value="event">event</option>
          <option value="important">important</option>
          <option value="birthday">birthday</option>
          <option value="festivity">festivity</option>
        </select>
    </form>
    <br>
    <a href="javascript:;" class="o-btn js-event__save">SAVE <span class="fa fa-save"></span></a>
  </div>
</div>

<script>
//global variables
var monthEl = $(".c-main");
var dataCel = $(".c-cal__cel");
var dateObj = new Date();
var month = dateObj.getUTCMonth() + 1;
var day = dateObj.getUTCDate();
var year = dateObj.getUTCFullYear();
var monthText = [
  "January",
  "February",
  "March",
  "April",
  "May",
  "June",
  "July",
  "August",
  "September",
  "October",
  "November",
  "December"
];
var indexMonth = month;
var todayBtn = $(".c-today__btn");
var addBtn = $(".js-event__add");
var saveBtn = $(".js-event__save");
var closeBtn = $(".js-event__close");
var winCreator = $(".js-event__creator");
var inputDate = $(this).data();
today = year + "-" + month + "-" + day;


// ------ set default events -------
function defaultEvents(dataDay,dataName,dataNotes,classTag){
  var date = $('*[data-day='+dataDay+']');
  date.attr("data-name", dataName);
  date.attr("data-notes", dataNotes);
  date.addClass("event");
  date.addClass("event--" + classTag);
}

defaultEvents(today, 'YEAH!','Today is your day','important');
defaultEvents('2017-12-25', 'MERRY CHRISTMAS','A lot of gift!!!!','festivity');
defaultEvents('2017-05-04', "LUCA'S BIRTHDAY",'Another gifts...?','birthday');
defaultEvents('2017-03-03', "MY LADY'S BIRTHDAY",'A lot of money to spent!!!!','birthday');


// ------ functions control -------

//button of the current day
todayBtn.on("click", function() {
  if (month < indexMonth) {
    var step = indexMonth % month;
    movePrev(step, true);
  } else if (month > indexMonth) {
    var step = month - indexMonth;
    moveNext(step, true);
  }
});

//higlight the cel of current day
dataCel.each(function() {
  if ($(this).data("day") === today) {
    $(this).addClass("isToday");
    fillEventSidebar($(this));
  }
});

//window event creator
addBtn.on("click", function() {
  winCreator.addClass("isVisible");
  $("body").addClass("overlay");
  dataCel.each(function() {
    if ($(this).hasClass("isSelected")) {
      today = $(this).data("day");
      document.querySelector('input[type="date"]').value = today;
    } else {
      document.querySelector('input[type="date"]').value = today;
    }
  });
});
closeBtn.on("click", function() {
  winCreator.removeClass("isVisible");
  $("body").removeClass("overlay");
});
saveBtn.on("click", function() {
  var inputName = $("input[name=name]").val();
  var inputDate = $("input[name=date]").val();
  var inputNotes = $("textarea[name=notes]").val();
  var inputTag = $("select[name=tags]")
    .find(":selected")
    .text();

  dataCel.each(function() {
    if ($(this).data("day") === inputDate) {
      if (inputName != null) {
        $(this).attr("data-name", inputName);
      }
      if (inputNotes != null) {
        $(this).attr("data-notes", inputNotes);
      }
      $(this).addClass("event");
      if (inputTag != null) {
        $(this).addClass("event--" + inputTag);
      }
      fillEventSidebar($(this));
    }
  });

  winCreator.removeClass("isVisible");
  $("body").removeClass("overlay");
  $("#addEvent")[0].reset();
});

//fill sidebar event info
function fillEventSidebar(self) {
  $(".c-aside__event").remove();
  var thisName = self.attr("data-name");
  var thisNotes = self.attr("data-notes");
  var thisImportant = self.hasClass("event--important");
  var thisBirthday = self.hasClass("event--birthday");
  var thisFestivity = self.hasClass("event--festivity");
  var thisEvent = self.hasClass("event");

  switch (true) {
    case thisImportant:
      $(".c-aside__eventList").append(
        "<p class='c-aside__event c-aside__event--important'>" +
        thisName +
        " <span> • " +
        thisNotes +
        "</span></p>"
      );
      break;
    case thisBirthday:
      $(".c-aside__eventList").append(
        "<p class='c-aside__event c-aside__event--birthday'>" +
        thisName +
        " <span> • " +
        thisNotes +
        "</span></p>"
      );
      break;
    case thisFestivity:
      $(".c-aside__eventList").append(
        "<p class='c-aside__event c-aside__event--festivity'>" +
        thisName +
        " <span> • " +
        thisNotes +
        "</span></p>"
      );
      break;
    case thisEvent:
      $(".c-aside__eventList").append(
        "<p class='c-aside__event'>" +
        thisName +
        " <span> • " +
        thisNotes +
        "</span></p>"
      );
      break;
   }
};
dataCel.on("click", function() {
  var thisEl = $(this);
  var thisDay = $(this)
  .attr("data-day")
  .slice(8);
  var thisMonth = $(this)
  .attr("data-day")
  .slice(5, 7);

  fillEventSidebar($(this));

  $(".c-aside__num").text(thisDay);
  $(".c-aside__month").text(monthText[thisMonth - 1]);

  dataCel.removeClass("isSelected");
  thisEl.addClass("isSelected");

});

//function for move the months
function moveNext(fakeClick, indexNext) {
  for (var i = 0; i < fakeClick; i++) {
    $(".c-main").css({
      left: "-=100%"
    });
    $(".c-paginator__month").css({
      left: "-=100%"
    });
    switch (true) {
      case indexNext:
        indexMonth += 1;
        break;
    }
  }
}
function movePrev(fakeClick, indexPrev) {
  for (var i = 0; i < fakeClick; i++) {
    $(".c-main").css({
      left: "+=100%"
    });
    $(".c-paginator__month").css({
      left: "+=100%"
    });
    switch (true) {
      case indexPrev:
        indexMonth -= 1;
        break;
    }
  }
}

//months paginator
function buttonsPaginator(buttonId, mainClass, monthClass, next, prev) {
  switch (true) {
    case next:
      $(buttonId).on("click", function() {
        if (indexMonth >= 2) {
          $(mainClass).css({
            left: "+=100%"
          });
          $(monthClass).css({
            left: "+=100%"
          });
          indexMonth -= 1;
        }
        return indexMonth;
      });
      break;
    case prev:
      $(buttonId).on("click", function() {
        if (indexMonth <= 11) {
          $(mainClass).css({
            left: "-=100%"
          });
          $(monthClass).css({
            left: "-=100%"
          });
          indexMonth += 1;
        }
        return indexMonth;
      });
      break;
  }
}

buttonsPaginator("#next", monthEl, ".c-paginator__month", false, true);
buttonsPaginator("#prev", monthEl, ".c-paginator__month", true, false);

//launch function to set the current month
moveNext(indexMonth - 1, false);

//fill the sidebar with current day
$(".c-aside__num").text(day);
$(".c-aside__month").text(monthText[month - 1]);

</script>
