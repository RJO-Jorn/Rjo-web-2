function calculateAge(birthDate) {
    const today = new Date();
    const birth = new Date(birthDate);
    let age = today.getFullYear() - birth.getFullYear();
    const m = today.getMonth() - birth.getMonth();
    
    // Adjust age if the birthday hasn't occurred yet this year
    if (m < 0 || (m === 0 && today.getDate() < birth.getDate())) {
        age--;
    }
    return age;
}

// Replace with your birthdate (YYYY-MM-DD format)
const birthDate = '2005-12-04';
const age = calculateAge(birthDate);

// Update the age in the HTML
document.getElementById('age').textContent = age;
