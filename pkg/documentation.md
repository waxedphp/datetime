# Datetime (flatpickr)

Lightweight and powerful datetime picker.

[https://flatpickr.js.org/]

MIT license

---
### PHP:

```php
  use \Waxedphp\Datetime\Setter as Datetime;

  $obj = new Datetime($this->waxed);
  $obj->setTheme('dark')->open();
  $obj->setEnableDate(date('Y-m-d', strtotime('yesterday')))
  ->setEnableDate(date('Y-m-d', strtotime('tomorrow')));  
  $this->waxed->pick('section1')->display([
    'payload1' => $obj->value(date('Y-m-d H:i')),
  ],$this->tpl.'/datetime');  


```
---

### HTML:

```html
<input type="text" class="waxed-datetime"
data-name="payload1"
/>


```
---
---

### PHP methods:

```php

  $obj = new Datetime($this->waxed);
  
  $obj->resetEnableDates();
  
  $obj->setEnableDate(date('Y-m-d', strtotime('+3 days')));
  
  $obj->setEnableDates(date('Y-m-d', strtotime('yesterday')), date('Y-m-d', strtotime('tomorrow')));

  $obj->resetDisableDates();

  $obj->setDisableDate(date('Y-m-d', strtotime('+3 days')));
  
  $obj->setDisableDates(date('Y-m-d', strtotime('yesterday')), date('Y-m-d', strtotime('tomorrow')));
  
  // sets theme
  $obj->setTheme('dark');
  // ['airbnb','confetti','dark','light','material_blue','material_green','material_orange','material_red']
  
  $obj->open();
  
  $obj->close();
  

  $obj->setAltFormat("F j, Y");
  
  $obj->setAltInput(true);
  //Show the user a readable date (as per altFormat), but return something totally different to the server.
  
  $obj->setAltInputClass('.class');
  //This class will be added to the input element created by the altInput option.
  //Note that altInput already inherits classes from the original input.
  
  $obj->setAllowInput(true);
  //Allows the user to enter a date directly into the input field.
  //By default, direct entry is disabled.

  $obj->setAllowInvalidPreload(true);
  //Boolean	false	Allows the preloading of an invalid date.
  //When disabled, the field will be cleared if the provided date is invalid

  $obj->setAriaDateFormat('F j, Y');
  //Defines how the date will be formatted in the aria-label for calendar days, using the same tokens as dateFormat.
  //If you change this, you should choose a value that will make sense if a screen reader reads it out loud.

  $obj->setConjunction('&');
  //When in "multiple" mode, conjunction is used to separate dates in the entry field.
  
  $obj->setClickOpens(true);
  //Whether clicking on the input should open the picker.
  //You could disable this if you wish to open the calendar manually with.open()

  $obj->setDateFormat('Y-m-d');
  //A string of characters which are used to define how the date will be displayed in the input box.

  $obj->setDefaultDate($date);
  //String	null	Sets the initial selected date(s).
  // If you're using mode: "multiple" or a range calendar supply an Array of Date objects or an Array of date strings which follow your dateFormat.
  // Otherwise, you can supply a single Date object or a date string.

  $obj->setDefaultHour(12);
  //Initial value of the hour element.
  
  $obj->setDefaultMinute(0);	
  //Initial value of the minute element.
  
  $obj->setDisableMobile(true);
  //Boolean	false	Set disableMobile to true to always use the non-native picker.
  //By default, flatpickr utilizes native datetime widgets unless certain options (e.g. disable) are used.

  $obj->setEnableTime(true);
  //Boolean	false	Enables time picker
  
  $obj->setEnableSeconds(true);
  //Boolean	false	Enables seconds in the time picker.
  
  $obj->setHourIncrement(2);
  //Integer	1	Adjusts the step for the hour input (incl. scrolling)
  
  $obj->setInline(true);
  //Boolean	false	Displays the calendar inline
  
  $obj->setMaxDate($date);
  //String/Date	null	The maximum date that a user can pick to (inclusive).
  
  $obj->setMinDate($date);
  //String/Date	null	The minimum date that a user can start picking from (inclusive).
  
  $obj->setMinuteIncrement(10);
  //Integer	5	Adjusts the step for the minute input (incl. scrolling)
  
  $obj->setMode('range');
  //String	"single"	"single", "multiple", or "range"
  
  $obj->setNextArrow = null;
  //String	>	HTML for the arrow icon, used to switch months.
  
  $obj->setNoCalendar(true);
  //Boolean	false	Hides the day selection in calendar.
  //Use it along with enableTime to create a time picker.

  $obj->setPosition('auto');
  //String	"auto"	Where the calendar is rendered relative to the input vertically and horizontally.
  //In the format of "[vertical] [horizontal]". Vertical can be auto, above or below (required).
  //Horizontal can be left, center or right.
  //e.g. "above" or "auto center"
  //positionElement	Element	null	The element off of which the calendar will be positioned.

  $obj->setPrevArrow('<');
  //String	<	HTML for the left arrow icon.
  
  $obj->setShorthandCurrentMonth(true);
  //Boolean	false	Show the month using the shorthand version (ie, Sep instead of September).
  
  $obj->setStatic(true);
  //Boolean	false	Position the calendar inside the wrapper and next to the input element*.
  
  $obj->setShowMonths(3);
  //Integer	1	The number of months to be shown at the same time when displaying the calendar.
  
  $obj->setTime_24hr(true);
  //boolean	false	Displays time picker in 24 hour mode without AM/PM selection when enabled.
  
  $obj->setWeekNumbers(true);
  //Boolean	false	Enables display of week numbers in calendar.
  
  $obj->setWrap(true);
  //Boolean	false	Custom elements and input groups
  
  $obj->setMonthSelectorType();

  
  //sets date and time and returns values to frontend.
  $obj->value(date('Y-m-d H:i'))

```
