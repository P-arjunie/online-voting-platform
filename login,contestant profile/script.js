document.addEventListener("DOMContentLoaded", function() {
  const profilesContainer = document.getElementById("profiles-container");

  const contestants = [
    {
      name: "Maria Anderson",
      age: 25,
      city: "Colombo",
      voteNumber: 1,
      profilePicture: "pro 1.jpeg",
      video: "con 1.mp4"
    },
    {
      name: "Anushaka Agrawal",
      age: 28,
      city: "Jaffna",
      voteNumber: 2,
      profilePicture: "pro 2.jpg",
      video: "con 2.mp4"
    },
    {
      name: "Peter Gallen",
      age: 28,
      city: "Galle",
      voteNumber: 3,
      profilePicture: "pro 3.jpg",
      video: "con 3.mp4"
    },
    {
      name: "Nikitha Perera",
      age: 28,
      city: "Kaluthara",
      voteNumber: 4,
      profilePicture: "pro 4.jpg",
      video: "con 4.mp4"
    },
    {
      name: "Hazeena Ahmed",
      age: 28,
      city: "Kaduwela",
      voteNumber: 5,
      profilePicture: "pro 5.jpeg",
      video: "con 5.mp4"
    },
    {
      name: "Shevin Gomez",
      age: 28,
      city: "Colombo",
      voteNumber: 6,
      profilePicture: "pro 6.jpeg",
      video: "con 7.mp4"
    },
  ];

  contestants.forEach(function(contestant) {
    const profileDiv = document.createElement("div");
    profileDiv.classList.add("profile");

    const profileImage = document.createElement("img");
    profileImage.src = contestant.profilePicture;

    const nameHeader = document.createElement("h2");
    nameHeader.textContent = contestant.name;

    const ageParagraph = document.createElement("p");
    ageParagraph.textContent = "Age: " + contestant.age;

    const cityParagraph = document.createElement("p");
    cityParagraph.textContent = "City: " + contestant.city;

    const voteParagraph = document.createElement("p");
    voteParagraph.textContent = "Vote Number: " + contestant.voteNumber;

    const videoElement = document.createElement("video");
    videoElement.controls = true;
    videoElement.src = contestant.video;

    profileDiv.appendChild(profileImage);
    profileDiv.appendChild(nameHeader);
    profileDiv.appendChild(ageParagraph);
    profileDiv.appendChild(cityParagraph);
    profileDiv.appendChild(voteParagraph);
    profileDiv.appendChild(videoElement);

    profilesContainer.appendChild(profileDiv);
  });
});