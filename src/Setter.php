<?php
namespace Waxedphp\Datetime;

class Setter extends \Waxedphp\Waxedphp\Php\Setters\AbstractSetter {


  protected ?string $altFormat = null;
  //	String	"F j, Y"	Exactly the same as date format, but for the altInput field
  
  protected ?bool $altInput = null;
  // Boolean	false	Show the user a readable date (as per altFormat), but return something totally different to the server.
  
  protected ?string $altInputClass = null;
  //String	""	This class will be added to the input element created by the altInput option.  Note that altInput already inherits classes from the original input.
  
  protected ?bool $allowInput = null;
  //Boolean	false	Allows the user to enter a date directly into the input field. By default, direct entry is disabled.

  protected ?bool $allowInvalidPreload = null;
  //Boolean	false	Allows the preloading of an invalid date. When disabled, the field will be cleared if the provided date is invalid

  //appendTo	HTMLElement	null	Instead of body, appends the calendar to the specified node instead*.

  protected ?string $ariaDateFormat	= null;
  //String	"F j, Y"	Defines how the date will be formatted in the aria-label for calendar days, using the same tokens as dateFormat. If you change this, you should choose a value that will make sense if a screen reader reads it out loud.

  protected ?string $conjunction = null;
  //String	null	When in "multiple" mode, conjunction is used to separate dates in the entry field.
  
  protected ?bool $clickOpens = null;
  //Boolean	true	Whether clicking on the input should open the picker. You could disable this if you wish to open the calendar manually with.open()

  protected ?string $dateFormat	= null;
  //String	"Y-m-d"	A string of characters which are used to define how the date will be displayed in the input box. The supported characters are defined in the table below.

  protected ?string $defaultDate = null;
  //String	null	Sets the initial selected date(s).
  // If you're using mode: "multiple" or a range calendar supply an Array of Date objects or an Array of date strings which follow your dateFormat.
  // Otherwise, you can supply a single Date object or a date string.

  protected ?int $defaultHour = null;
  //Number	12	Initial value of the hour element.
  
  protected ?int $defaultMinute = null;	
  //Initial value of the minute element.
  
  //disable	Array	[]	See Disabling dates
  
  protected ?bool $disableMobile = null;
  //Boolean	false	Set disableMobile to true to always use the non-native picker.
  //By default, flatpickr utilizes native datetime widgets unless certain options (e.g. disable) are used.

  //enable	Array	undefined	See Enabling dates

  protected ?bool $enableTime = null;
  //Boolean	false	Enables time picker
  
  protected ?bool $enableSeconds = null;
  //Boolean	false	Enables seconds in the time picker.
  
  //formatDate	Function	null	Allows using a custom date formatting function instead of the built-in handling for date formats using dateFormat, altFormat, etc.

  protected ?int $hourIncrement = null;
  //Integer	1	Adjusts the step for the hour input (incl. scrolling)
  
  protected ?bool $inline = null;
  //Boolean	false	Displays the calendar inline
  
  protected ?string $maxDate = null;
  //String/Date	null	The maximum date that a user can pick to (inclusive).
  
  protected ?string $minDate = null;
  //String/Date	null	The minimum date that a user can start picking from (inclusive).
  
  protected ?int $minuteIncrement = null;
  //Integer	5	Adjusts the step for the minute input (incl. scrolling)
  
  protected ?string $mode = null;
  //String	"single"	"single", "multiple", or "range"
  
  protected ?string $nextArrow = null;
  //String	>	HTML for the arrow icon, used to switch months.
  
  protected ?bool $noCalendar = null;
  //Boolean	false	Hides the day selection in calendar.
  //Use it along with enableTime to create a time picker.

  //onChange	Function, [functions]	null	Function(s) to trigger on every date selection. See Events API
  //onClose	Function, [functions]	null	Function(s) to trigger on every time the calendar is closed. See Events API
  //onOpen	Function, [functions]	null	Function(s) to trigger on every time the calendar is opened. See Events API
  //onReady	Function, [functions]	null	Function to trigger when the calendar is ready. See Events API
  //parseDate	Function	false	Function that expects a date string and must return a Date object
  
  protected ?string $position = null;
  //String	"auto"	Where the calendar is rendered relative to the input vertically and horizontally. In the format of "[vertical] [horizontal]". Vertical can be auto, above or below (required). Horizontal can be left, center or right.
  //e.g. "above" or "auto center"
  //positionElement	Element	null	The element off of which the calendar will be positioned.

  protected ?string $prevArrow = null;
  //String	<	HTML for the left arrow icon.
  
  protected ?bool $shorthandCurrentMonth = null;
  //Boolean	false	Show the month using the shorthand version (ie, Sep instead of September).
  
  protected ?bool $static = null;
  //Boolean	false	Position the calendar inside the wrapper and next to the input element*.
  
  protected ?int $showMonths = null;
  //Integer	1	The number of months to be shown at the same time when displaying the calendar.
  
  protected ?bool $time_24hr = null;
  //boolean	false	Displays time picker in 24 hour mode without AM/PM selection when enabled.
  
  protected ?bool $weekNumbers = null;
  //Boolean	false	Enables display of week numbers in calendar.
  
  protected ?bool $wrap = null;
  //Boolean	false	Custom elements and input groups
  
  protected ?string $monthSelectorType = null;
  //String	"dropdown"	How the month should be displayed in the header of the calendar.
  //"dropdown" or "static"
  //If showMonths has a value greater than 1, the month is always shown as static.


  protected ?string $theme = null;
  
  protected ?bool $open = null;
  
  protected ?array $enableDates = null;
  
  protected ?array $disableDates = null;



  /**
   * @var array<mixed> $setup
   */
  private array $setup = [
  ];
  
  /**
   * allowed options
   *
   * @var array<mixed> $_allowedOptions
   */
  protected array $_allowedOptions = [
  'theme', 'open', 'enableDates', 'disableDates',
  'altFormat', 'altInput', 'altInputClass', 'allowInput',
  'allowInvalidPreload', 'ariaDateFormat', 'conjunction', 'clickOpens',
  'dateFormat', 'defaultDate', 'defaultHour', 'defaultMinute',
  'disableMobile', 'enableTime', 'enableSeconds', 'hourIncrement',
  'inline', 'maxDate', 'minDate', 'minuteIncrement', 'mode', 'nextArrow',
  'noCalendar', 'position', 'prevArrow', 'shorthandCurrentMonth', 'static',
  'showMonths', 'time_24hr', 'weekNumbers', 'wrap', 'monthSelectorType'
  ];

  function setValue($value) {
    $this->setup['value'] = $value;
    return $this;
  }

  function setMode($mode) {
    $this->setup['mode'] = $mode;
    return $this;
  }

  function setTheme($theme) {
    $this->theme = $theme;
    return $this;
  }

  function open() {
    $this->open = true;
    return $this;
  }

  function close() {
    $this->open = false;
    return $this;
  }

  function resetEnableDates() {
    $this->enableDates = null;
    return $this;
  }

  function resetDisableDates() {
    $this->disableDates = null;
    return $this;
  }

  function setEnableDate(string $date) {
    if (!is_array($this->enableDates)) $this->enableDates = [];
    $this->enableDates[] = $date;
    return $this;
  }

  function setDisableDate(string $date) {
    if (!is_array($this->disableDates)) $this->disableDates = [];
    $this->disableDates[] = $date;
    return $this;
  }


  function setEnableDates(string $fromDate, string $toDate) {
    if (!is_array($this->enableDates)) $this->enableDates = [];
    $this->enableDates[] = [
      'from' => $fromDate,
      'to' => $toDate,
    ];
    return $this;
  }

  function setDisableDates(string $from, string $to) {
    if (!is_array($this->disableDates)) $this->disableDates = [];
    $this->disableDates[] = [
      'from' => $fromDate,
      'to' => $toDate,
    ];
    return $this;
  }

  /**
  * value
  *
  * @param mixed $value
  * @return array<mixed>
  */
  public function value(mixed $value = null): array {
    $a = [];
    $b = $this->getArrayOfAllowedOptions();
    if (!empty($b)) {
      $a['config'] = $b;
    }
    $a['value'] = $value;
    return $a;
  }

}
