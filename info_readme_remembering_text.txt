In CSS, the later property(ies) will override previous one
For example, the "color" property in .nav and .active when used as
class="nav active"
red will be taken, as red is the later one.

.active {
    background-color: #4CAF50DD;
    color: white;
    font-weight: bold;
}
.nav{
    vertical-align: middle;
    display: inline-block;
    color: red;
}