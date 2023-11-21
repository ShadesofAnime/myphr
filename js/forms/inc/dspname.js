// Function to concatenate and update the display name
function updateDisplayName() {
    const FName = document.getElementById("FName").value;
    const MName = document.getElementById("MName").value;
    const LName = document.getElementById("LName").value;
    const Degree = document.getElementById("Degree").value;

    const fullName = `${LName}, ${FName} ${MName} ${Degree}`;
    document.getElementById("DName").value = fullName;
}

// Listen for changes in input fields
const inputFields = document.querySelectorAll("input[type='text']");
inputFields.forEach((input) => {
    input.addEventListener("input", updateDisplayName);
    });

// Initialize display name on page load
updateDisplayName();