/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function () {

  //qtip for monthly cm
  $('#monthlyCm_nlng').qtip({
    prerender: false, // Render tooltip HTML on $(document).ready()
    id: 'qtipformonthlycm', // Incremental numerical ID used by default
    overwrite: true, // Overwrite previous tooltips on this element
    suppress: false,
    content: {
      text: '<p><label>Enter the Month</label><input data-role="date" data-inline="true" type="text"></p>' +
	      '<p><button type="submit" id="submit-6" class="ui-shadow ui-corner-all ">Submit</button></p>',
      title: 'Enter The Details',
      button: true},
    style: {
      classes: 'qtip-blue qtip-shadow'
    },
    position: {
      my: 'left center', // Position my top left...
      at: 'right center', // at the bottom right of...
      target: $('#monthlyCm_nlng'), // my target
      effect: function (api, pos, viewport) {
	// "this" refers to the tooltip
	$(this).animate(pos, {
	  duration: 600,
	  easing: 'linear',
	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
	});
      }
    },
    show: {
      event: 'click'
    },
    hide: {
      event: 'unfocus'
    }
  });
  //qtip for weekly cm
  $('#weeklyCm_nlng').qtip({
    prerender: false, // Render tooltip HTML on $(document).ready()
    id: 'qtipformonthlycm', // Incremental numerical ID used by default
    overwrite: true, // Overwrite previous tooltips on this element
    suppress: false,
    content: {
      text: '<p><label>From</label><input data-role="date" class="tipDate" type="text"></p>' +
	      '<p><label>To</label><input data-role="date" class="tipDate" type="text"></p>' +
	      '<p><button type="submit" id="submit-6" class="ui-shadow ui-corner-all ui-mini">Submit</button></p>',
      title: 'Enter The Details',
      button: true},
    style: {
      classes: 'qtip-blue qtip-shadow'
    },
    position: {
      my: 'left center', // Position my top left...
      at: 'right center', // at the bottom right of...
      target: $('#weeklyCm_nlng'), // my target
      effect: function (api, pos, viewport) {
	// "this" refers to the tooltip
	$(this).animate(pos, {
	  duration: 600,
	  easing: 'linear',
	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
	});
      }
    },
    show: {
      event: 'click'
    },
    hide: {
      event: 'unfocus'
    }
  });
  //codes for qtip for location search
  $('#locationCm_nlng').qtip({
    prerender: false, // Render tooltip HTML on $(document).ready()
    id: 'qtipformonthlycm', // Incremental numerical ID used by default
    overwrite: true, // Overwrite previous tooltips on this element
    suppress: false,
    content: {
      text: '<p><label for="text-basic">Enter Location:</label><input id="cmLocation" value="" type="text"></p>' +
	      '<p><button type="submit" id="submit-6" class="ui-shadow ui-corner-all ui-mini">Submit</button></p>',
      title: 'Enter The Details',
      button: true},
    style: {
      classes: 'qtip-blue qtip-shadow'
    },
    position: {
      my: 'left center', // Position my top left...
      at: 'right center', // at the bottom right of...
      target: $('#locationCm_nlng'), // my target
      effect: function (api, pos, viewport) {
	// "this" refers to the tooltip
	$(this).animate(pos, {
	  duration: 600,
	  easing: 'linear',
	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
	});
      }
    },
    show: {
      event: 'click'
    },
    hide: {
      event: 'unfocus'
    }
  });

  //this code workd for job update 
  //codes for qtip for location search
  $('#cmUpdateJob_nlng').qtip({
    prerender: false, // Render tooltip HTML on $(document).ready()
    id: 'qtipformonthlycm', // Incremental numerical ID used by default
    overwrite: true, // Overwrite previous tooltips on this element
    suppress: false,
    content: {
      text: '<p><label for="text-basic">Enter JobId:</label><input name="text-basic" id="text-basic" value="" type="text"></p>' +
	      '<p><button type="submit" id="submit-6" class="ui-shadow ui-corner-all ui-mini">Submit</button></p>',
      title: 'Enter The Details',
      button: true},
    style: {
      classes: 'qtip-blue qtip-shadow'
    },
    position: {
      my: 'left center', // Position my top left...
      at: 'right center', // at the bottom right of...
      target: $('#cmUpdateJob_nlng'), // my target
      effect: function (api, pos, viewport) {
	// "this" refers to the tooltip
	$(this).animate(pos, {
	  duration: 600,
	  easing: 'linear',
	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
	});
      }
    },
    show: {
      event: 'click'
    },
    hide: {
      event: 'unfocus'
    }
  });

  //codes for pm jobs and updates
  $('#pmUpdateJob_nlng').qtip({
    prerender: false, // Render tooltip HTML on $(document).ready()
    id: 'qtipformonthlycm', // Incremental numerical ID used by default
    overwrite: true, // Overwrite previous tooltips on this element
    suppress: false,
    content: {
      text: '<p><label for="text-basic">Enter JobId:</label><input name="text-basic" id="pmJobId"  value="" type="text"></p>' +
	      '<p><button type="submit" id="submit-6" class="ui-shadow ui-corner-all ui-mini">Submit</button></p>',
      title: 'Enter The Details',
      button: true},
    style: {
      classes: 'qtip-blue qtip-shadow'
    },
    position: {
      my: 'left center', // Position my top left...
      at: 'right center', // at the bottom right of...
      target: $('#pmUpdateJob_nlng'), // my target
      effect: function (api, pos, viewport) {
	// "this" refers to the tooltip
	$(this).animate(pos, {
	  duration: 600,
	  easing: 'linear',
	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
	});
      }
    },
    show: {
      event: 'click'
    },
    hide: {
      event: 'unfocus'
    }
  });

  //this codes work for ppmreport
  $('#ppmreport_nlng').qtip({
    prerender: false, // Render tooltip HTML on $(document).ready()
    id: 'qtipformonthlycm', // Incremental numerical ID used by default
    overwrite: true, // Overwrite previous tooltips on this element
    suppress: false,
    content: {
      text: '<p><label for="text-basic">Enter Month:</label><input name="text-basic" id="ppmMonth" class="tipDate" value="" type="text"></p>' +
	      '<p><button type="submit" id="submit-6" class="ui-shadow ui-corner-all ui-mini">Submit</button></p>',
      title: 'Enter The Details',
      button: true},
    style: {
      classes: 'qtip-blue qtip-shadow'
    },
    position: {
      my: 'left center', // Position my top left...
      at: 'right center', // at the bottom right of...
      target: $('#ppmreport_nlng'), // my target
      effect: function (api, pos, viewport) {
	// "this" refers to the tooltip
	$(this).animate(pos, {
	  duration: 600,
	  easing: 'linear',
	  queue: false // Set this to false so it doesn't interfere with the show/hide animations
	});
      }
    },
    show: {
      event: 'click'
    },
    hide: {
      event: 'unfocus'
    }
  });

});//end of ducument ready