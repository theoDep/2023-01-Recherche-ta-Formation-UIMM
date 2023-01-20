import React, { useState, useEffect } from "react";
import SearchBar from "./SearchBar";
import TrainingCard from "./TrainingCard";

import Container from "react-bootstrap/Container";
import Row from "react-bootstrap/Row";
import Col from "react-bootstrap/Col";

export default ({ trainings }) => {
  const [search, setSearch] = useState("");
  const [trainingList, setTrainingList] = useState([]);

  const handleSubmit = (e) => {
    e.preventDefault();
  };

  const handleChange = (e) => {
    setSearch(e.target.value);
    const filteredTrainings = trainings.filter(
      (training) =>
        training.title.toLowerCase().includes(search.toLowerCase()) ||
        training.level.toLowerCase().includes(search.toLowerCase())
    );
    setTrainingList(filteredTrainings);
  };

  useEffect(() => {
    setTrainingList(trainings);
  }, []);

  return (
    <>
      <Container fluid className="py-5 px-0">
          <SearchBar
            search={search}
            handleChange={handleChange}
            handleSubmit={handleSubmit}
          />
        <Row sm={3} className="sectionCard justify-content-center">
          {trainingList.map((training) => (
            <TrainingCard training={training} />
          ))}
        </Row>
      </Container>
    </>
  );
};
