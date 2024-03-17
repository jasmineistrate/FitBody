let dropdwonDash = document.getElementById('dropdown-dashboard');
let clickDashboard = document.getElementById('parent-dropdown');
let showDropdown = false;
clickDashboard.addEventListener('click', ()=>{
    showDropdown = !showDropdown;
    if(showDropdown === false)
    {
        dropdwonDash.style.display="none";
    }
    else
    {
        dropdwonDash.style.display="block";
    }
})
let dropdwonDashUser = document.getElementById('dropdown-dashboard-user');
let clickDashboardUser = document.getElementById('parent-dropdown');
let showDropdownUser = false;
clickDashboard.addEventListener('click', ()=>{
    showDropdownUser = !showDropdownUser;
    if(showDropdownUser === false)
    {
        dropdwonDashUser.style.display="none";
    }
    else
    {
        dropdwonDashUser.style.display="block";
    }
})