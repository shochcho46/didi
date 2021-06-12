<?php
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GigController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainmenuController;
use App\Http\Controllers\NotifyController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\RegController;
use App\Http\Controllers\RegUserController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\SubmenuController;
use App\Http\Controllers\ProposalController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

//  For Normal User
Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/logins', [HomeController::class, 'login'])->name('home.login');
Route::get('/signup', [HomeController::class, 'signup'])->name('home.signup');
Route::get('/valide/signup', [HomeController::class, 'valideSignUp'])->name('home.validsignup');
Route::post('/confirmsignup', [HomeController::class, 'confirmSignUp'])->name('home.signupconfirm');

Route::get('/show/gig', [HomeController::class, 'showAllGig'])->name('home.gigindex');
Route::get('show/details/gigs/{gig}', [HomeController::class, 'descripGig'])->name('home.showgigdetails');
Route::post('/search/gigs', [HomeController::class, 'searchGig'])->name('home.searchgig');


Route::get('/show/projects', [HomeController::class, 'showAllProject'])->name('home.projectindex');
Route::get('show/details/projects/{project}', [HomeController::class, 'describeProject'])->name('home.showprojectdetails');
Route::post('/search/projects', [HomeController::class, 'searchProject'])->name('home.searchproject');
Route::get('/search/{search}', [HomeController::class, 'searchProjectget'])->name('home.searchprojectget');

Route::get('/show/category/main/{mainmenu}', [HomeController::class, 'showMainProject'])->name('home.mainproindex');
Route::get('/show/category/sub/{submenu}', [HomeController::class, 'showSubProject'])->name('home.subproindex');


// Register New User
Route::post('/register', [RegController::class, 'regUser'])->name('reg.regser');



// Validate Login
Route::post('/confirmlogin', [LoginController::class, 'authenticate'])->name('login.confirm');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// For Reg User

Route::get('/regusers', [RegUserController::class, 'index'])->name('reguser.index');

Route::get('/regusers/dashboard', [RegUserController::class, 'dashboard'])->name('reguser.dashboard');
Route::get('regusers/event/{eventname}/{eventid}/{notificationid}', [RegUserController::class, 'event'])->name('regusers.event');

Route::get('/regusers/show/gig', [RegUserController::class, 'showAllGig'])->name('reguser.gigindex');
Route::get('/regusers/show/details/gigs/{gig}', [RegUserController::class, 'descripGig'])->name('reguser.showgigdetails');

Route::post('/regusers/search/gigs', [RegUserController::class, 'searchGig'])->name('reguser.searchgig');


Route::get('/regusers/show/projects', [RegUserController::class, 'showAllProject'])->name('reguser.projectindex');

Route::get('/regusers/show/category/main/{mainmenu}', [RegUserController::class, 'showMainProject'])->name('reguser.mainproindex');
Route::get('/regusers/show/category/sub/{submenu}', [RegUserController::class, 'showSubProject'])->name('reguser.subproindex');

Route::get('/regusers/show/details/projects/{project}', [RegUserController::class, 'describeProject'])->name('reguser.showprojectdetails');

Route::post('/regusers/search/projects', [RegUserController::class, 'searchProject'])->name('reguser.searchproject');
Route::get('/regusers/search/{search}', [RegUserController::class, 'searchProjectget'])->name('reguser.searchprojectget');





//Proposal
Route::get('regusers/proposal', [ProposalController::class, 'index'])->name('proposals.index');
Route::get('regusers/proposal/create/{project}', [ProposalController::class, 'createtype'])->name('proposals.create');
Route::post('regusers/proposal', [ProposalController::class, 'store'])->name('proposals.store');
Route::get('regusers/proposal/{proposal}/edit', [ProposalController::class, 'edit'])->name('proposals.edit');
Route::get('regusers/proposal/{proposal}', [ProposalController::class, 'show'])->name('proposals.show');
Route::put('regusers/proposal/{proposal}', [ProposalController::class, 'update'])->name('proposals.update');
Route::delete('regusers/proposal/{proposal}', [ProposalController::class, 'destroy'])->name('proposals.destroy');

Route::get('regusers/accept/proposal/{proposal}', [ProposalController::class, 'accept'])->name('proposals.accept');

Route::get('regusers/request/proposal', [ProposalController::class, 'requestproposal'])->name('proposals.request');


//Skills
Route::get('/skills', [SkillController::class, 'index'])->middleware('subadmincheck')->name('skills.index');
Route::get('/skills/create', [SkillController::class, 'create'])->name('skills.create');
Route::post('/skills', [SkillController::class, 'store'])->name('skills.store');
Route::get('/skills/{skill}/edit', [SkillController::class, 'edit'])->middleware('subadmincheck')->name('skills.edit');
Route::put('/skills/{skill}', [SkillController::class, 'update'])->middleware('subadmincheck')->name('skills.update');
Route::delete('/skills/{skill}', [SkillController::class, 'destroy'])->middleware('subadmincheck')->name('skills.destroy');

Route::get('/skills/autocomplete', [SkillController::class, 'autocomplete'])->name('skills.autocomplete');

//Profiles

Route::get('/profiles/create', [ProfileController::class, 'create'])->name('profiles.create');
Route::post('/profiles/personal', [ProfileController::class, 'store'])->name('profiles.store');
Route::post('/profiles/skill', [ProfileController::class, 'skill'])->name('profiles.skill');

Route::get('/profiles/{profile}', [ProfileController::class, 'profileshow'])->name('profiles.profileshow');

Route::patch('/profiles/pics/{pic}', [ProfileController::class, 'profilepic'])->name('profiles.updatepic');
Route::put('/profiles/passwords/{pass}', [ProfileController::class, 'password'])->name('profiles.password');
Route::get('/profiles/notification', [ProfileController::class, 'usernotification'])->name('profiles.notification');

// Gigs
Route::get('/gigs', [GigController::class, 'index'])->name('gigs.index');
Route::get('/gigs/create', [GigController::class, 'create'])->name('gigs.create');
Route::post('/gigs', [GigController::class, 'store'])->name('gigs.store');
Route::get('/gigs/{gig}', [GigController::class, 'show'])->name('gigs.show');
Route::get('/gigs/{gig}/edit', [GigController::class, 'edit'])->name('gigs.edit');
Route::put('/gigs/{gig}', [GigController::class, 'update'])->name('gigs.update');
Route::delete('/gigs/{gig}', [GigController::class, 'destroy'])->name('gigs.destroy');

Route::put('/gigs/disable/{gig}', [GigController::class, 'disable'])->name('gigs.disable');
Route::patch('/active/{gig}', [GigController::class, 'active'])->name('gigs.active');
Route::get('/gigs/disable/list', [GigController::class, 'actionView'])->name('gigsdisable.index');

//Project
Route::get('/projects/disale', [ProjectController::class, 'disableindex'])->name('projects.disableindex');

Route::get('/projects', [ProjectController::class, 'index'])->name('projects.index');
Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');
Route::get('/projects/{project}', [ProjectController::class, 'show'])->name('projects.show');
Route::get('/projects/{project}/edit', [ProjectController::class, 'edit'])->name('projects.edit');
Route::put('/projects/{project}', [ProjectController::class, 'update'])->name('projects.update');
Route::delete('/projects/{project}', [ProjectController::class, 'destroy'])->name('projects.destroy');

Route::get('/disable/projects/{project}', [ProjectController::class, 'disable'])->name('projects.disable');
Route::get('/enable/projects/{project}', [ProjectController::class, 'enable'])->name('projects.enable');

Route::get('/disable/proposal/projects/{project}', [ProjectController::class, 'proposaloff'])->name('projects.proposaldisable');
Route::get('/enable/proposal/projects/{project}', [ProjectController::class, 'proposalon'])->name('projects.proposalenable');

Route::get('/details/proposal/projects/{project}', [ProjectController::class, 'allproposal'])->name('projects.allproposal');
Route::get('/projects/submenu/{project}', [ProjectController::class, 'getSubMenu'])->name('projects.submenu');

//pin project
Route::get('/pin/projects/{project}', [ProjectController::class, 'pinproject'])->name('projects.pin');

Route::put('pin/category/projects/{project}', [ProjectController::class, 'pincategory'])->name('projects.pincategory');

Route::put('pin/home/projects/{project}', [ProjectController::class, 'pinhome'])->name('projects.pinhome');




// Notifications
Route::get('/notifications', [NotifyController::class, 'index'])->name('notifications.index');
Route::delete('/notifications/{notification}', [NotifyController::class, 'destroy'])->name('notifications.destroy');

//For Admins

Route::get('/admins/notificationreads/{notificationid}', [AdminController::class, 'notificationRead'])->name('admins.notificationread');
Route::get('/admins', [AdminController::class, 'index'])->name('admin.index');

Route::get('/admins/adduser', [AdminController::class, 'adduser'])->name('admin.adduser');
Route::post('/admins/adduser/confirm', [AdminController::class, 'adduserconfirm'])->name('admin.adduserconfirm');

Route::get('admins/event/{eventname}/{eventid}/{notificationid}', [AdminController::class, 'event'])->name('admins.event');

Route::get('admin/gigs/{gig}', [AdminController::class, 'showGig'])->name('admins.gigshow');
Route::get('admin/reviewstores/{reviewstore}', [AdminController::class, 'reviewStore'])->name('admins.reviewstore');

Route::get('admin/profiles/{user}', [AdminController::class, 'showProfile'])->name('admins.profileshow');

Route::get('admin/projects/{project}', [AdminController::class, 'showProject'])->name('admins.projectshow');

Route::get('admin/proposals/{proposal}', [AdminController::class, 'showProposal'])->name('admins.proposalshow');

Route::get('admin/task/{taskname}/{taskid}/{taskaction}', [AdminController::class, 'task'])->name('admins.task');

Route::get('admin/taskupdate/{taskobject}/{taskaction}', [AdminController::class, 'taskUpdate'])->name('admins.taskupdate');

Route::get('/admins/userlist/{userlist}', [AdminController::class, 'normaluser'])->name('admin.userlist');

Route::get('/admins/admin/{userlist}', [AdminController::class, 'adminuser'])->name('admin.adminuser');

Route::get('/admins/adminlist/{usertype}/{status}', [AdminController::class, 'adminlist'])->name('admin.adminlist');

Route::get('/admins/showallproject', [AdminController::class, 'showallproject'])->name('admin.showallproject');

Route::get('/admins/showproject/{projectstatus}', [AdminController::class, 'projectstatus'])->name('admin.projectstatus');

Route::get('/admins/showallproposal/{proposalstatus}', [AdminController::class, 'showallproposal'])->name('admin.showallproposal');

Route::get('/admins/showallgig/{gigstatus}', [AdminController::class, 'showallgig'])->name('admin.showallgig');


//Main Menu

Route::get('/mainmenus', [MainmenuController::class, 'index'])->name('mainmenus.index');
Route::get('/mainmenus/create', [MainmenuController::class, 'create'])->name('mainmenus.create');
Route::post('/mainmenus', [MainmenuController::class, 'store'])->name('mainmenus.store');
Route::get('/mainmenus/{mainmenu}/edit', [MainmenuController::class, 'edit'])->name('mainmenus.edit');
Route::put('/mainmenus/{mainmenu}', [MainmenuController::class, 'update'])->name('mainmenus.update');
Route::delete('/mainmenus/{mainmenu}', [MainmenuController::class, 'destroy'])->name('mainmenus.destroy');

Route::put('/mainmenus/disable/{mainmenu}', [MainmenuController::class, 'disable'])->name('mainmenus.disable');
Route::patch('/active/{mainmenu}', [MainmenuController::class, 'active'])->name('mainmenus.active');
Route::get('/disable/list', [MainmenuController::class, 'actionView'])->name('mainmenusdisable.index');

//Sub Menu

Route::get('/submenus', [SubmenuController::class, 'index'])->name('submenus.index');
Route::get('/submenus/create', [SubmenuController::class, 'create'])->name('submenus.create');
Route::post('/submenus', [SubmenuController::class, 'store'])->name('submenus.store');
Route::get('/submenus/{submenu}/edit', [SubmenuController::class, 'edit'])->name('submenus.edit');
Route::put('/submenus/{submenu}', [SubmenuController::class, 'update'])->name('submenus.update');
Route::delete('/submenus/{submenu}', [SubmenuController::class, 'destroy'])->name('submenus.destroy');

Route::put('/submenus/disable/{submenu}', [SubmenuController::class, 'disable'])->name('submenus.disable');
Route::patch('submenus/active/{submenu}', [SubmenuController::class, 'active'])->name('submenus.active');
Route::get('submenus/disable/list', [SubmenuController::class, 'actionView'])->name('submenusdisable.index');
