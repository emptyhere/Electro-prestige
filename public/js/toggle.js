let state = [
  {toggle:".menu-mobile__list", click:".menu-mobile__toggle"},
  {toggle:".footer_list_spacing", click:".footer_list_toggle"},
  {toggle:".footer_list_spacing-2", click:".footer_list_toggle-2"},
  {toggle:".footer_list_spacing-3", click:".footer_list_toggle-3"},
  {toggle:".footer_list_spacing-4", click:".footer_list_toggle-4"}
];

let toggleBtn = (toggle, click) => {
  $(document).ready(function(){
    $(toggle).css("display","none");
      $(click).click(function(){
       $(toggle).toggle();
     });
    });
}

for(let i = 0; i < state.length; i++) {
  toggleBtn(state[i].toggle, state[i].click);
};

