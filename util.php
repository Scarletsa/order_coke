<?php

class Util () {
  function theft_check() {

  }

  function order_estimate($weeks) {

      // average = (last week((ideal or actual, whichever is greater))*.5 + 2 weeks ago((ideal or actual, whichever is greater))*.35 + 3 weeks ago((ideal or actual, whichever is greater))*.15);
      // bottle estimate = average*(9/7)*1.15 - current; estimate for 7 days; calculating for 9 days; adding 15%. Will be the number of bottles needed to order;
      // if bottle estimate%quantity > .25, round down; else, round up.
        // case estimate = bottle estimate/quantity; (Rounded up or down by rule above.)
    }
  }

}
?>
