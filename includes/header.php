<style>

    
* { margin:0; padding:0; box-sizing:border-box; }

body { font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }

header {
    display: flex;
    align-items: center;
    justify-content: flex-start;
    gap: 20px;
    padding: 6px 40px;
    background: linear-gradient(135deg, #042654 0%, #033985 100%);
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    border-bottom: 4px solid yellow;
}
.logo { flex-shrink:0; }
.logo img { height:85px; width:auto; border-radius:10%; object-fit:cover; display:block; background:#fff; padding:3px; }
header h1 {
    color:#fff; font-size:30px; font-weight:700; letter-spacing:2px; text-transform:uppercase;
    text-shadow:2px 2px 4px rgba(0,0,0,0.4); margin:0; line-height:1.2; white-space:nowrap;
    margin-right:auto;
}
header p {
    color:#d4e2f0; font-size:14px; font-weight:400; margin:0; padding-left:20px;
    border-left:2px solid #c9a84c; letter-spacing:0.5px; line-height:1.4; white-space:nowrap;
}
@media (max-width:992px) {
    header { flex-wrap:wrap; padding:10px 20px; gap:8px; justify-content:center; }
    .logo img { height:55px; }
    header h1 { font-size:18px; white-space:normal; text-align:center; flex:1 1 100%; order:2; margin-right:0; }
    header p { font-size:12px; white-space:normal; text-align:center; border-left:none; padding-left:0; flex:1 1 100%; order:3; }
    .logo { order:1; }
}
@media (max-width:480px) {
    header { padding:8px 12px; }
    .logo img { height:45px; }
    header h1 { font-size:15px; }
    header p { font-size:11px; }
}
</style>
<header>
    <div class="logo"><a href="../aboutu/about.php"><img src="../../images/1.png" alt="logo"></a></div>
    <h1>EAST WEST COLLEGE OF MANAGEMENT BENGALURU</h1>
    <p>No 63, Off Magadi Road, Vishwaneedam Post, Bangalore - 560091</p>
</header>