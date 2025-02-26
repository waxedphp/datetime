/*
 *
 *
 * updated 20190611
 * updated 20231015
 *
 * npm i flatpickr --save


 *
 */
;(function ( $, window, document, undefined ) {

    var pluginName = 'waxed/datetime',
        _search = '.waxed-datetime',
        defaults = {
            propertyName: "value"
        },
        inited = false,
        _api = [],
        loadedTheme = null
        ;


    function Instance(pluggable,element,dd){
      var that = this;
      this.pluggable = pluggable;
      this.element = element;
      this.o = element;
      this.t = 'flatpickr';
      this.dd = dd;
      this.name = '';
      this.cfg = {
      };
      this.theme = null;
      this.allowedThemes = [
        'airbnb','confetti','dark','light','material_blue','material_green','material_orange','material_red'
      ];
      
      this.invalidate = function(RECORD){

      },

      this.setRecord = function(RECORD){
        //console.log('SETTING', RECORD);
        if (typeof that.dd.name == 'undefined') return;
        var rec = that.pluggable.getvar(that.dd.name, RECORD);
        if (typeof rec != 'object') { return; };
        //console.log('SETTING DATETIME', rec, typeof rec['value']);
        if (typeof rec['config'] == 'object') {
          var config = rec['config'];
          if (typeof config.theme == 'string') {
            that.setTheme(config.theme);
          };
          
          var allowedOptions = ['altFormat', 'altInput', 'altInputClass', 'allowInput',
          'allowInvalidPreload', 'ariaDateFormat', 'conjunction', 'clickOpens',
          'dateFormat', 'defaultDate', 'defaultHour', 'defaultMinute',
          'disableMobile', 'enableTime', 'enableSeconds', 'hourIncrement',
          'inline', 'maxDate', 'minDate', 'minuteIncrement', 'mode', 'nextArrow',
          'noCalendar', 'position', 'prevArrow', 'shorthandCurrentMonth', 'static',
          'showMonths', 'time_24hr', 'weekNumbers', 'wrap', 'monthSelectorType'];
          var changed = false;
          for (var i=0;i<allowedOptions.length;i++) {
            if (typeof config[allowedOptions[i]] != 'undefined') {
              this.cfg[allowedOptions[i]] = config[allowedOptions[i]];
              //that.picker.config[allowedOptions[i]] = config[allowedOptions[i]];
              //that.picker.set(allowedOptions[i], config[allowedOptions[i]]);
              //console.log(that.picker, allowedOptions[i], config[allowedOptions[i]]);
              changed = true;
            };
          };
          if (changed) {
            //that.picker.init();
            //that.picker.redraw();
            //console.log(that.picker);
            //that.free();
            that.picker = $(that.element).flatpickr(that.cfg);
          }
          

          if (typeof config.open == 'boolean') {
            if (config.open) {
              that.picker.open();
            } else {
              that.picker.close();
            };
          };

          if (typeof config.enableDates == 'object') {
            that.picker.set('enable', config.enableDates);
          };
          if (typeof config.disableDates == 'object') {
            that.picker.set('disable', config.disableDates);
          };          
          
        };
        if (typeof rec['value'] == 'string') {
          var d = moment(rec['value']);
          that.picker.setDate(d.toDate());
          $(that.element).val(rec['value']);
        };
        if ((typeof rec['from'] == 'string')&&(typeof rec['to'] == 'string')) {
          var d1 = moment(rec['from']);
          var d2 = moment(rec['to']);
          //that.picker.setDateRange(d1.toDate(),d2.toDate());
        };
        if (typeof rec['open'] == 'boolean') {
          if (rec.open) {
            that.picker.open();
          } else {
            that.picker.close();
          };
        };

        if (typeof rec['enableDates'] == 'object') {
          that.picker.set('enable', rec['enableDates']);
        };
        if (typeof rec['disableDates'] == 'object') {
          that.picker.set('disable', rec['disableDates']);
        };

      },
      
      this.setTheme = function(theme) {
        //console.log(theme);
        if (this.allowedThemes.includes(theme)) {
          if (this.theme == theme) return;
          if (loadedTheme) $(loadedTheme).remove();
          this.theme = theme;      
          loadedTheme = $('<link rel="stylesheet" type="text/css" href="/assets/flatpickr/themes/'+this.theme+'.css">').appendTo('head');
        }
      },


      this.free = function() {
        that.picker.destroy();

      },

      this.init=function() {
        //console.log('FLATPICKR');
        this.cfg = {
          enableTime:true,
          //plugins: [new confirmDatePlugin({})],
          time_24hr:true,
          dateFormat: 'Y-m-d H:i',
          altFormat: 'Y-m-d H:i'
        };

        if ($(that.element).hasClass('inline')) {
          this.cfg.inline = true;
          this.cfg.allowInput = false;
        };

        this.cfg.minuteIncrement = 1;

        if ($(that.element).hasClass('nocalendar')) {
          this.cfg.noCalendar = true;
          this.cfg.dateFormat = 'H:i';
        };

        if ($(that.element).hasClass('notime')) {
          this.cfg.enableTime = false;
          this.cfg.dateFormat = 'Y-m-d';
        };

        if ($(that.element).hasClass('splitview')) {
        //  this.cfg.splitView = true;
        };

        if ((typeof that.dd.datetimemode == 'string')
          &&($.inArray(that.dd.datetimemode, ['single','multiple','range'])>-1)) {
          this.cfg.mode = that.dd.datetimemode;
        };
        //console.log('flatpickr',this.cfg);
        that.picker = $(that.element).flatpickr(this.cfg);

        if ($(that.element).hasClass('hidden')) {
          $(that.element).css({'visibility':'hidden','height':'1px'});
        }

        if ($(that.element).hasClass('opened')) {
        //  that.picker.show();
        };



        inited = true;
      },
      this._init_();
    }

    $.waxxx(pluginName, _search, Instance, _api);

})( jQuery, window, document );
/*--*/
//# sourceURL: /js/jam/boilerplate/plugin.js
